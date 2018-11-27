<?php

namespace App\Models;


use App\Db;

class Person
{
    public $id;
    public $firstName;
    public $lastName;
    public $age;

    public static function findAll()
    {
        $sql = 'SELECT * FROM persons';
        $db = new Db;
        return $db->query($sql, [], 'App\Models\Person');
    }
}