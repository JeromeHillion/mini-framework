<?php

namespace App\System;


use App\Config\Config;
use App\Config\Db;

class App
{

    private static $_instance;
    private  $connection;

    private function __construct()
    {
    }
public static function getInstance(){
     if (is_null(self::$_instance)){
         self::$_instance = new App();
     }
         return self::$_instance;
}

public function getConfigInstance()
{
      return Config::getInstance();
}

public function getConnection(){

    if (!$this->connection){
        $this->connection = new Db(
                $this->getConfigInstance()->getConfig('localhost'),
                $this->getConfigInstance()->getConfig('test'),
                $this->getConfigInstance()->getConfig('root'),
                $this->getConfigInstance()->getConfig(''),
            );

    }
}

}