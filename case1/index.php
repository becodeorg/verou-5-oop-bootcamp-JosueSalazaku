<?php
$fruitTaxRate = 0.06;
$wineTaxRate = 0.21;
$fruitTax = 0;
$wineTax = 0;
$totalPrice = 0;

$basket = [
    ['item' => 'Bananas', 'pieces' => 6, 'price' => 1, 'type' => 'fruit'],
    ['item' => 'Apples', 'pieces' => 3, 'price' => 1.5, 'type' => 'fruit'],
    ['item' => 'Wine', 'pieces' => 2, 'price' => 10, 'type' => 'Alcohol']
];

function TotalTax($basket) {
    global $fruitTaxRate, $wineTaxRate, $fruitTax, $wineTax;
    foreach ($basket as $item) {
        $pieces = $item['pieces'];
        $price = $item['price'];
        $totalPrice += $pieces * $price;

        if ($item['type'] === 'fruit') {
            $fruitTax += $pieces * $price * $fruitTaxRate;
        } elseif ($item['type'] === 'Alcohol') {
            $wineTax += $pieces * $price * $wineTaxRate;
        }
    }
}

function totalPrice($basket) {
    $totalPrice = 0;
    foreach ($basket as $item) {
        $pieces = $item['pieces'];
        $price = $item['price'];
        $totalPrice += $pieces * $price;
    }

    return $totalPrice;
}

TotalTax($basket);
$totalPriceWithTax = totalPrice($basket) + $totalTax;

echo "Total Tax (Fruit): €$fruitTax <br>";
echo "Total Tax (Wine): €$wineTax <br>";
echo "Total Price with Tax: €$totalPriceWithTax <br>";

