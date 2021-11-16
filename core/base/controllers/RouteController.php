<?php

use core\base\controllers;

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
