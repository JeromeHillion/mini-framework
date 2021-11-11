<?php

namespace App\Config;

class Db
{
protected object $db;

    public function __construct(string $db_host, string $db_name, string $db_user, string $db_password)
    {

        $this->db =  new \PDO("mysql:host=$db_host;dbname=$db_name, $db_user, $db_password");
        $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }


}