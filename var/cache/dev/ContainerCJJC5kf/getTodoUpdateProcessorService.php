<?php

namespace ContainerCJJC5kf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTodoUpdateProcessorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\State\TodoUpdateProcessor' shared autowired service.
     *
     * @return \App\State\TodoUpdateProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/State/ProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/src/State/TodoUpdateProcessor.php';

        return $container->privates['App\\State\\TodoUpdateProcessor'] = new \App\State\TodoUpdateProcessor(($container->privates['App\\Repository\\TodoRepository'] ?? $container->load('getTodoRepositoryService')));
    }
}
