<?php

namespace ContainerK5jb0fg;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd7bec = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb8e8a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4bb9c = [
        
    ];

    public function getConnection()
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'getConnection', array(), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'getMetadataFactory', array(), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'getExpressionBuilder', array(), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'beginTransaction', array(), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'getCache', array(), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'transactional', array('func' => $func), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'commit', array(), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->commit();
    }

    public function rollback()
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'rollback', array(), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'getClassMetadata', array('className' => $className), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'createQuery', array('dql' => $dql), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'createNamedQuery', array('name' => $name), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'createQueryBuilder', array(), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'flush', array('entity' => $entity), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'clear', array('entityName' => $entityName), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->clear($entityName);
    }

    public function close()
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'close', array(), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->close();
    }

    public function persist($entity)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'persist', array('entity' => $entity), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'remove', array('entity' => $entity), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'refresh', array('entity' => $entity), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'detach', array('entity' => $entity), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'merge', array('entity' => $entity), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'contains', array('entity' => $entity), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'getEventManager', array(), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'getConfiguration', array(), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'isOpen', array(), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'getUnitOfWork', array(), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'getProxyFactory', array(), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'initializeObject', array('obj' => $obj), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'getFilters', array(), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'isFiltersStateClean', array(), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'hasFilters', array(), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return $this->valueHolderd7bec->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerb8e8a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd7bec) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd7bec = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd7bec->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, '__get', ['name' => $name], $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        if (isset(self::$publicProperties4bb9c[$name])) {
            return $this->valueHolderd7bec->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7bec;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd7bec;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7bec;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd7bec;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, '__isset', array('name' => $name), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7bec;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd7bec;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, '__unset', array('name' => $name), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd7bec;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd7bec;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, '__clone', array(), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        $this->valueHolderd7bec = clone $this->valueHolderd7bec;
    }

    public function __sleep()
    {
        $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, '__sleep', array(), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;

        return array('valueHolderd7bec');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb8e8a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb8e8a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb8e8a && ($this->initializerb8e8a->__invoke($valueHolderd7bec, $this, 'initializeProxy', array(), $this->initializerb8e8a) || 1) && $this->valueHolderd7bec = $valueHolderd7bec;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd7bec;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd7bec;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
