<?php

// Rapporte toutes les erreurs PHP
use App\System\App;

ini_set('error_reporting', E_ALL);

require_once "vendor/autoload.php";

App::getInstance()->getConnection();
