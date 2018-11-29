<?php

use App\Models\Product;
use App\Models\Ordarable;
use App\Models\Config;

require __DIR__ . '/autoload.php';

$product = Product::findAll()[0];

function showPrice(Ordarable $pr)
{
    echo 'My price is ' . $pr->getPrice();
}

showPrice($product);

var_dump($product);

$config = Config::getInstance();
var_dump($config);