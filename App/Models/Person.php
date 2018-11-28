<?php

namespace App\Models;


use App\Db;

class Person
{
    public static $table = 'persons';

    public $id;
    public $firstName;
    public $lastName;
    public $age;

    public static function findAll()
    {
        $sql = 'SELECT * FROM ' . self::$table;
        $db = new Db;
        return $db->query($sql, [], self::class);
    }
}