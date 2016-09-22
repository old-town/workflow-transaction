<?php
/**
 * @link    https://github.com/old-town/workflow-transaction
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace OldTown\Workflow\Transaction\PhpUnit\TestData;

/**
 * Class TestPaths
 *
 * @package OldTown\Workflow\Transaction\PhpUnit\TestData
 */
class TestPaths
{
    /**
     * Путь до директории модуля
     *
     * @return string
     */
    public static function getPathToModule()
    {
        return __DIR__ . '/../../../';
    }

    /**
     * Путь до конфига приложения по умолчанию
     */
    public static function getPathToDefaultAppConfig()
    {
        return  __DIR__ . '/../_files/DefaultApp/config/application.config.php';
    }


}
