<?php

namespace App\Config;

use PDO;

class Connection
{
protected PDO $connection;

    public function __construct($db_host,$db_name,$db_user,$db_password)
    {

        $this->connection =  new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
        $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);


    }

}