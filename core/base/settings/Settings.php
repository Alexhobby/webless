<?php

namespace base\settings;

class Settings
{

    private $routes = [
        'admin' => [
            'name' => 'admin',
            'path' => 'core/admin/controllers',
            'hrUrl' => 'false'
        ],
        'settings' => [
            'path' => 'core/base/settings/'
        ],
        'plagins' => [
            'path' => 'core/plagins/',
            'hrUrl' => 'false'
        ],
        'user' => [
            'path' => 'core/user/',
            'hrUrl' => 'true',
            'routes' => []
        ],
        'default' => [
            'controller' => 'IndexController',
            'inputMethod' => 'inputData',
            'outputMethod' => 'outputData'
        ]

    ];
    private function __construct()
    {
    }
    private function __clone()
    {
    }
    static private function instance(){
        if(self::$_instance instanceof self){
            return self::$_instance;
        }
        return self::$_instance new self;
    }
}
