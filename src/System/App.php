<?php

namespace App\System;


use App\Bdd\Connection;



class App
{

    private static $_instance;


    private function __construct()
    {
    }

    public static function getInstance(): App
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new App();
        }
        return self::$_instance;
    }


    public function getConnectionInstance(): Connection
    {

        return Connection::getInstance();
    }

    public function getConnection(): \PDO
    {

        return $this->getConnectionInstance()->getConnection();

    }

}