<?php

namespace App\Manager;

class UrlManager
{
    private static $_instance;

    private function __construct(){}

    public static function getInstance(): UrlManager
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new UrlManager();
        }
        return self::$_instance;
    }

    public function getControllerName(){
        $url = $_SERVER['REQUEST_URI'];
        $parts = explode("/", $url);
        array_shift($parts);
        array_shift($parts);
        foreach ($parts as $part){
            $element = $part;
        }
       /* var_dump($element);
        die;*/
        return $element;

    }
}