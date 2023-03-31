<?php

namespace ContainerNmVmxUb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVarDumper_ServerConnectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'var_dumper.server_connection' shared service.
     *
     * @return \Symfony\Component\VarDumper\Server\Connection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Server/Connection.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/ContextProvider/ContextProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/ContextProvider/SourceContextProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/ContextProvider/RequestContextProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/var-dumper/Dumper/ContextProvider/CliContextProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';

        return $container->privates['var_dumper.server_connection'] = new \Symfony\Component\VarDumper\Server\Connection('tcp://'.$container->getEnv('string:VAR_DUMPER_SERVER'), ['source' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider('UTF-8', \dirname(__DIR__, 4), ($container->privates['debug.file_link_formatter'] ??= new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter($container->getEnv('default::SYMFONY_IDE')))), 'request' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\RequestContextProvider(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack())), 'cli' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\CliContextProvider()]);
    }
}
