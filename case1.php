<?php
$fruitTaxRate = 0.06;
$wineTaxRate = 0.21;


$basket = [
    'Bananas' => ['pieces' => 6, 'price' => 1],
    'Apples' => ['pieces' => 3, "price" => 1.5],
    'Wine' => ['pieces' => 2, 'price' => 10]
];

foreach ($basket as $item => $deatails) {
    $pieces = $deatails['pieces'];
    $price = $deatails['price'];
    $itemTotal = $pieces * $price;
    $TotalPrice += $itemTotal;

    if ($item === 'Bananas' || $item === "Apples") {
        $fruitTax += $itemTotal = $fruitTaxRate;
    } elseif ($item === 'Wine') {
        $wineTax += $itemTotal = $wineTaxRate;
    }
}


var_dump($basket);