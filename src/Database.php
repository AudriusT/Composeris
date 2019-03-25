<?php
namespace Tasker;
use PDO;

class Database
{
public static function connect ($config) {
    try{
        return new PDO(
            $config['connection'].';dbname',$config['dbName'],
                $config['username'],$config['password'],$config['options']
    );
    }catch (PDOException $e) {
        die($e-getMessage());
    }
}
}