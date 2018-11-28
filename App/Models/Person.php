<?php

namespace App\Models;


class Person extends Model
{
    public static $table = 'persons';

    public $firstName;
    public $lastName;
    public $age;

    public static function getTable()
    {
        return static::$table;
    }
}