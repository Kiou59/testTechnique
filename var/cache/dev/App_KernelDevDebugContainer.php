<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSKPJnyv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSKPJnyv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSKPJnyv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSKPJnyv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSKPJnyv\App_KernelDevDebugContainer([
    'container.build_hash' => 'SKPJnyv',
    'container.build_id' => '58f0aff6',
    'container.build_time' => 1662706857,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSKPJnyv');
