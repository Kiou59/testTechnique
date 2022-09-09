<?php

namespace ContainerSKPJnyv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WjY1WService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wj__Y1W' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wj__Y1W'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'dataTypeRepository' => ['privates', 'App\\Repository\\DataTypeRepository', 'getDataTypeRepositoryService', true],
            'historyRepository' => ['privates', 'App\\Repository\\HistoryRepository', 'getHistoryRepositoryService', true],
            'moduleRepository' => ['privates', 'App\\Repository\\ModuleRepository', 'getModuleRepositoryService', true],
            'sensorRepository' => ['privates', 'App\\Repository\\SensorRepository', 'getSensorRepositoryService', true],
        ], [
            'dataTypeRepository' => 'App\\Repository\\DataTypeRepository',
            'historyRepository' => 'App\\Repository\\HistoryRepository',
            'moduleRepository' => 'App\\Repository\\ModuleRepository',
            'sensorRepository' => 'App\\Repository\\SensorRepository',
        ]);
    }
}
