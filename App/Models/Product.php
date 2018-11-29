<?php

namespace App\Models;


class Product extends Model implements Ordarable
{
    protected static $table = 'products';

    public $name;
    public $price;
    public $weight;


    public static function getTable()
    {
        return static::$table;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}