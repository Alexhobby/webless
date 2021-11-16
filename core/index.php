<?php
define('VG_ACCESS', true);
header('Content-Type:text/html;charset:utf-8');
session_start();
require_once 'config.php';
require_once './base/settings/internal_settings.php';

use base\exceptions\RouteException;
use core\base\controllers\RouteController;

echo 'we are here';


try {
    RouteController::getInstance()->route();
} catch (RouteException $e) {
    exit($e->getMessage());
}
