<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTeu8D82\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTeu8D82/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTeu8D82.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTeu8D82\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerTeu8D82\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Teu8D82',
    'container.build_id' => '1ddb23ca',
    'container.build_time' => 1609711278,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTeu8D82');
