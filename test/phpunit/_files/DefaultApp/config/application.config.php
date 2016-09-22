<?php
/**
 * @link    https://github.com/old-town/workflow-transaction
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */

use OldTown\Workflow\Transaction\PhpUnit\TestData\TestPaths;
use Nnx\ModuleOptions\Module as ModuleOptions;
use OldTown\Workflow\Transaction\Module;

return [
    'modules'                 => [
        ModuleOptions::MODULE_NAME,
        Module::MODULE_NAME
    ],
    'module_listener_options' => [
        'module_paths'      => [
            Module::MODULE_NAME => TestPaths::getPathToModule(),
        ],
        'config_glob_paths' => [
            __DIR__ . '/config/autoload/{{,*.}global,{,*.}local}.php',
        ],
    ]
];
