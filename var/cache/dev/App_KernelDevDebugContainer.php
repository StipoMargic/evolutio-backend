<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNmVmxUb\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNmVmxUb/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNmVmxUb.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNmVmxUb\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNmVmxUb\App_KernelDevDebugContainer([
    'container.build_hash' => 'NmVmxUb',
    'container.build_id' => '4645ac03',
    'container.build_time' => 1680209436,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNmVmxUb');
