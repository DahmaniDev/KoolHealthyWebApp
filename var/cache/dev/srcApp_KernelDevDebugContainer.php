<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3fAEx0d\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3fAEx0d/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container3fAEx0d.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container3fAEx0d\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container3fAEx0d\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '3fAEx0d',
    'container.build_id' => '8c88b746',
    'container.build_time' => 1586309001,
], __DIR__.\DIRECTORY_SEPARATOR.'Container3fAEx0d');
