<?php
/**
 * @link    https://github.com/old-town/workflow-transaction
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace OldTown\Workflow\Transaction;


use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\DependencyIndicatorInterface;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Nnx\ModuleOptions\Module as ModuleOptions;

/**
 * Class Module
 *
 * @package Nnx\ModuleOptions
 */
class Module implements
    AutoloaderProviderInterface,
    ConfigProviderInterface,
    DependencyIndicatorInterface
{
    /**
     * Имя секции в конфиги приложения отвечающей за настройки модуля
     *
     * @var string
     */
    const CONFIG_KEY = 'old_town_workflow_transaction';

    /**
     * Имя модуля
     *
     * @var string
     */
    const MODULE_NAME = __NAMESPACE__;

    /**
     * @return array
     */
    public function getModuleDependencies()
    {
        return [
            ModuleOptions::MODULE_NAME
        ];
    }

    /**
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return [
            'Zend\Loader\StandardAutoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__ . '/src/',
                ],
            ],
        ];
    }


    /**
     * @inheritdoc
     *
     * @return array
     */
    public function getConfig()
    {
        return array_merge_recursive(
            include __DIR__ . '/config/module.config.php',
            include __DIR__ . '/config/serviceManager.config.php'
        );
    }

} 