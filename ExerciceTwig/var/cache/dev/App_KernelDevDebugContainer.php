<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXUrDMHq\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXUrDMHq/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXUrDMHq.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXUrDMHq\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXUrDMHq\App_KernelDevDebugContainer([
    'container.build_hash' => 'XUrDMHq',
    'container.build_id' => 'f636b808',
    'container.build_time' => 1639149932,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXUrDMHq');
