<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBrmYaiQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBrmYaiQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBrmYaiQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBrmYaiQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBrmYaiQ\App_KernelDevDebugContainer([
    'container.build_hash' => 'BrmYaiQ',
    'container.build_id' => '7e6a33ed',
    'container.build_time' => 1680276437,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBrmYaiQ');
