<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSEYUb5A\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSEYUb5A/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSEYUb5A.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSEYUb5A\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSEYUb5A\App_KernelDevDebugContainer([
    'container.build_hash' => 'SEYUb5A',
    'container.build_id' => '80cb1478',
    'container.build_time' => 1583353162,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSEYUb5A');
