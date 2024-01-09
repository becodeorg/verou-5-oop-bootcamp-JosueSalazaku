<?php

$basket = [
    'bananas' => ['pieces' => 6, 'price' => 1],
    'Apples' => ['pieces' => 3, "price" => 1.5],
    'Bottles of Wine' => ['pieces' => 2, 'price' => 10]
];

foreach ($basket as $item => $deatails) {
    $pieces = $deatails['pieces'];
    $price = $deatails['price'];
}

$fruitTaxRate = 0.06;
$wineTaxRate = 0.21;

var_dump($basket);