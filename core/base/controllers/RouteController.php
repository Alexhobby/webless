<?php

namespace core\base\controllers;

use core\base\settings\Settings;
use core\base\settings\ShopSettings;

class RouteController
{
    static private $_instance;

    private function __construct()
    {
    }
    private function __clone()
    {
    }
    static private function getInstance()
    {
        if (self::$_instance instanceof self) {
            return self::$_instance;
        } else {
            return self::$_instance = new self;
        }
    }
}
