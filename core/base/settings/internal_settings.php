<?php
defined('VG_ACCESS') or die('Access denied');

const TEMPLATE = 'templates/default/';
const ADMIN_TEMPLATE = 'core/admin/views';

const COOKIE_VERSION = '1.0.0';
const CRYPT_KEY = ""; //ключ для шифрования куки
const COOKIE_TIME = 60; //for admin limit
const BLOCK_TIME = 3;

const QTY = 8;
const QTY_LINCKS = 3; // for paging novigation

const ADMIN_CSS_JS = [
    "styles" => [],
    "scripts" => []
];

const USER_CSS_JS = [
    "styles" => [],
    "scripts" => []
];


use base\exceptions\RouteException;


function inc_class($class_name)
{
    $class_name = str_replace('\\', '/', $class_name);

    if (!@include_once $class_name . '.php') {

        throw new RouteException('wrong');
    }
}

spl_autoload_register('inc_class');
