<?php
$fruitTaxRate = 0.06;
$wineTaxRate = 0.21;
$fruitDiscountRate = 0.5; 
$wineTax = 0;
$fruitTax = 0;
$totalPrice = 0;

$basket = [
    'Bananas' => ['pieces' => 6, 'price' => 1],
    'Apples' => ['pieces' => 3, 'price' => 1.5],
    'Wine' => ['pieces' => 2, 'price' => 10],
];

foreach ($basket as $itemName => $itemDetails) {
    $quantity = $itemDetails['pieces'];
    $price = $itemDetails['price'];
    

    $discountedPrice = $price * (1 - $fruitDiscountRate);

    if ($itemName === 'Bananas' || $itemName === 'Apples') {
        $fruitTax += $quantity * $discountedPrice * $fruitTaxRate;
    } elseif ($itemName === 'Wine') {
        $wineTax += $quantity * $price * $wineTaxRate;
    }

    $totalPrice += $quantity * $discountedPrice;
}


$totalTax = $fruitTax + $wineTax;
$totalPriceWithTax = $totalPrice + $totalTax;

echo "Total Tax (Fruit): €$fruitTax <br>";
echo "Total Tax (Wine): €$wineTax <br>";
echo "Total Price with Tax: €$totalPriceWithTax <br>";

var_dump($basket);
