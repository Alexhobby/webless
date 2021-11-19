<?php

namespace base\settings;

class Settings
{
    static private $_instance;

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

    private $templateArr = [
        'text' => ['name', 'phone', 'adress'],
        'textartea' => ['content', 'keyword']
    ];

    private function __construct()
    {
    }
    private function __clone()
    {
    }

    static public function get($property)
    {
        return self::instance()->$property;
    }

    static public function instance()
    {
        if (self::$_instance instanceof self) {
            return self::$_instance;
        }
        return self::$_instance = new self;
    }
    public function clueProperties($class)
    {
        $baseProperties = [];

        foreach ($this as $name => $item) {
            $property = $class::get($name);
        }
    }
}
