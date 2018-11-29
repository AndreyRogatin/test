<?php

namespace App\Models;


class Product extends Model
{
    protected static $table = 'products';

    public $name;
    public $price;
    public $weight;


    public static function getTable()
    {
        return static::$table;
    }
}