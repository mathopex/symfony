<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFdqASz7\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFdqASz7/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFdqASz7.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFdqASz7\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFdqASz7\App_KernelDevDebugContainer([
    'container.build_hash' => 'FdqASz7',
    'container.build_id' => '64a9a0a1',
    'container.build_time' => 1639141105,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFdqASz7');
