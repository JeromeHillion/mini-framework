<?php

namespace App\Manager;

use App\Controller\ControllerInterface;
use App\Manager\UrlManager;

class ControllerManager
{
    private static $_instance;

    private function __construct()
    {
    }

    public static function getInstance(): ControllerManager
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new ControllerManager();
        }
        return self::$_instance;
    }


    public static function getController(): ControllerInterface
    {
        $urlManager = UrlManager::getInstance();
        $controllerName = $urlManager->getControllerName();

        if (empty($controllerName)) {
            $controllerName = 'Index';
        }

        $ControllerClass = "App\\Controller\\" . $controllerName . "Controller";

        return new  $ControllerClass;
    }

}