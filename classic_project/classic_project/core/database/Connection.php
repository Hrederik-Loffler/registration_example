<?php
namespace Core\Database;

use \PDO;
use \PDOException;

class Connection
{
    public static $pdo;
    public static function make($config)
    {
        try {
            return self::$pdo = new PDO($config['connection'].';dbname='.$config['dbname'], $config['username'], $config['password'], $config['options']);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
