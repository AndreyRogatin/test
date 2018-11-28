<?php

namespace App\Models;


use App\Db;

abstract class Model
{
    protected static $table = '';

    public $id;

    abstract public static function getTable();

    public static function findAll()
    {
        $sql = 'SELECT * FROM ' . static::$table;
        $db = new Db;
        return $db->query($sql, [], static::class);
    }
}