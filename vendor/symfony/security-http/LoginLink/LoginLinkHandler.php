<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Http\LoginLink;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;
use Symfony\Component\Security\Core\Signature\Exception\ExpiredSignatureException;
use Symfony\Component\Security\Core\Signature\Exception\InvalidSignatureException;
use Symfony\Component\Security\Core\Signature\SignatureHasher;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Http\LoginLink\Exception\ExpiredLoginLinkException;
use Symfony\Component\Security\Http\LoginLink\Exception\InvalidLoginLinkException;

/**
 * @author Ryan Weaver <ryan@symfonycasts.com>
 */
final class LoginLinkHandler implements LoginLinkHandlerInterface
{
    private $urlGenerator;
    private $userProvider;
    private array $options;
    private $signatureHashUtil;

    public function __construct(UrlGeneratorInterface $urlGenerator, UserProviderInterface $userProvider, SignatureHasher $signatureHashUtil, array $options)
    {
        $this->urlGenerator = $urlGenerator;
        $this->userProvider = $userProvider;
        $this->signatureHashUtil = $signatureHashUtil;
        $this->options = array_merge([
            'route_name' => null,
            'lifetime' => 600,
        ], $options);
    }

    public function createLoginLink(UserInterface $user, Request $request = null): LoginLinkDetails
    {
        $expiresAt = new \DateTimeImmutable(sprintf('+%d seconds', $this->options['lifetime']));

        $expires = $expiresAt->format('U');
        $parameters = [
            'user' => $user->getUserIdentifier(),
            'expires' => $expires,
            'hash' => $this->signatureHashUtil->computeSignatureHash($user, $expires),
        ];

        if ($request) {
            $currentRequestContext = $this->urlGenerator->getContext();
            $this->urlGenerator->setContext(
                (new RequestContext())
                    ->fromRequest($request)
                    ->setParameter('_locale', $request->getLocale())
            );
        }

        try {
            $url = $this->urlGenerator->generate(
                $this->options['route_name'],
                $parameters,
                UrlGeneratorInterface::ABSOLUTE_URL
            );
        } finally {
            if ($request) {
                $this->urlGenerator->setContext($currentRequestContext);
            }
        }

        return new LoginLinkDetails($url, $expiresAt);
    }

    public function consumeLoginLink(Request $request): UserInterface
    {
        $userIdentifier = $request->get('user');

        try {
            $user = $this->userProvider->loadUserByIdentifier($userIdentifier);
        } catch (UserNotFoundException $exception) {
            throw new InvalidLoginLinkException('User not found.', 0, $exception);
        }

        $hash = $request->get('hash');
        $expires = $request->get('expires');

        try {
            $this->signatureHashUtil->verifySignatureHash($user, $expires, $hash);
        } catch (ExpiredSignatureException $e) {
            throw new ExpiredLoginLinkException(ucfirst(str_ireplace('signature', 'login link', $e->getMessage())), 0, $e);
        } catch (InvalidSignatureException $e) {
            throw new InvalidLoginLinkException(ucfirst(str_ireplace('signature', 'login link', $e->getMessage())), 0, $e);
        }

        return $user;
    }
}