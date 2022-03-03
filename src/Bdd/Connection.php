<?php

namespace App\Bdd;

use App\Config\Config;
use PDO;

class Connection
{

    private static $_instance;

    private function __construct()
    {
    }

    public static function  getInstance(): Connection
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new Connection();
        }
        return self::$_instance;
    }

    public function getConfigInstance(): Config
    {
        return Config::getInstance();
    }
    public function getConnection(): PDO
    {

        $db_host = $this->getConfigInstance()->getConfig('db_host');
        $db_name = $this->getConfigInstance()->getConfig('db_name');
        $db_user = $this->getConfigInstance()->getConfig('db_user');
        $db_password = $this->getConfigInstance()->getConfig('db_password');

        $connection = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
        $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        /*echo 'Connexion à la Bdd réussi !';*/

        return $connection;
    }
}