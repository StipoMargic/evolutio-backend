<?php

namespace ContainerNmVmxUb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Doctrine_Orm_QueryExtension_FilterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.doctrine.orm.query_extension.filter' shared service.
     *
     * @return \ApiPlatform\Doctrine\Orm\Extension\FilterExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/Extension/QueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/Extension/FilterExtension.php';

        return $container->privates['api_platform.doctrine.orm.query_extension.filter'] = new \ApiPlatform\Doctrine\Orm\Extension\FilterExtension(($container->privates['api_platform.filter_locator'] ?? $container->getApiPlatform_FilterLocatorService()));
    }
}
