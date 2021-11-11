<?php

namespace App\Config;

class Config
{
    protected array $config;
    private static ?Config $_instance = null;

    private function __construct()
    {
        $this->config = parse_ini_file('bdd.ini');
    }

    public static function getInstance(): Config
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new Config();
        }

        return self::$_instance;
    }

    public function getFullConfig(): array
    {
        return $this->config;
    }

    public function getConfig($value)
    {

        if (empty($config)) {
            $config = $this->getFullConfig();
        }
        foreach ($config as $data){
            $value = $data.' ';
        }
        return $value ;
    }
}