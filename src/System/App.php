<?php

namespace App\System;


use App\Config\Config;
use App\Config\Connection;

class App
{

    private static $_instance;
    private  $connection;

    private function __construct()
    {
    }
public static function getInstance(): App
{
     if (is_null(self::$_instance)){
         self::$_instance = new App();
     }
         return self::$_instance;
}

public function getConfigInstance(): Config
{
      return Config::getInstance();
}

public function getConnection(){

    if (!$this->connection){

        $this->connection= new Connection(
                $this->getConfigInstance()->getConfig('db_host'),
                $this->getConfigInstance()->getConfig('db_name'),
                $this->getConfigInstance()->getConfig('db_user'),
                $this->getConfigInstance()->getConfig('db_password')

            );

    }
    if ($this->connection){
        echo "Connexion à la bdd réussi";
    }
}

}