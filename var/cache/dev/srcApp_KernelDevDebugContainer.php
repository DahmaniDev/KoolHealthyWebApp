<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerECtt93x\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerECtt93x/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerECtt93x.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerECtt93x\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerECtt93x\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'ECtt93x',
    'container.build_id' => 'eb7a5364',
    'container.build_time' => 1591358787,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerECtt93x');
