<?php

namespace App\Core;

use PDO;

class DB
{
    private static $instance = NULL;

    private function __construct() {}

    public static function pdo()
    {
        if (self::$instance == NULL) {
            $params = require ROOT.'/config/db.php';
            self::$instance = new PDO($params['dsn'], $params['username'], $params['password']);
        }
        return self::$instance;
    }
}