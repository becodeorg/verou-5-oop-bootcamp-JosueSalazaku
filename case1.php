<?php
$fruitTaxRate = 0.06;
$wineTaxRate = 0.21;
$fruitTax = 0;
$wineTax = 0;
$totalPrice = 0;

$basket = [
    'Bananas' => ['pieces' => 6, 'price' => 1],
    'Apples' => ['pieces' => 3, 'price' => 1.5],
    'Wine' => ['pieces' => 2, 'price' => 10],
];

foreach ($basket as $itemName => $itemDetails) {
    $quantity = $itemDetails['pieces'];
    $price = $itemDetails['price'];
    $totalPrice += $quantity * $price;

    if ($itemName === 'Bananas' || $itemName === 'Apples') {
        $fruitTax += $quantity * $price * $fruitTaxRate;
    } elseif ($itemName === 'Wine') {
        $wineTax += $quantity * $price * $wineTaxRate;
    }
}

$totalTax = $fruitTax + $wineTax;
$totalPriceWithTax = $totalPrice + $totalTax;

echo "Total Tax (Fruit): €$fruitTax <br>";
echo "Total Tax (Wine): €$wineTax <br>";
echo "Total Price with Tax: €$totalPriceWithTax <br>";

var_dump($basket);
