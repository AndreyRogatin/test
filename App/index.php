<?php

use App\Models\Product;
use App\Models\Ordarable;

require __DIR__ . '/autoload.php';

$product = Product::findAll()[0];

function showPrice(Ordarable $pr)
{
    echo 'My price is ' . $pr->getPrice();
}

showPrice($product);

var_dump($product);