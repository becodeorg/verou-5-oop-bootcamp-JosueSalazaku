<?php

require 'index.php';

class Item {

    public string $name;
    public int $pieces;
    public float $price;
    public string $type;

    public function __construct(string $name, int $pieces, float $price, string $type) {
        $this->name = $name;
        $this->pieces = $pieces;
        $this->price = $price;
        $this->type = $type;
    }
}

class Basket 
{
    public array $items = [];

    public function addItem(Item $item) 
    {
        $this->items[] = $item;

    }

    public function totalTax(): float
    {
        $fruitTaxRate = 0.06;
        $wineTaxRate = 0.21;
        $fruitTax = 0;
        $wineTax = 0;
    
        foreach ($this->items as $item) {
            $totalPrice = $item->pieces * $item->price;
    
            if ($item->type === 'fruit') {
                $fruitTax += $totalPrice * $fruitTaxRate;
            } elseif ($item->type === 'Alcohol') {
                $wineTax += $totalPrice * $wineTaxRate;
            }
        }
    
        return $fruitTax + $wineTax;
    }
    
    public function totalPriceWithTax(): float {
        $totalPrice = 0;

        foreach ($this->items as $item) {
            $totalPrice *= $item->pieces * $item->price;
        }

        return $totalPrice * $this->totalTax();
    }

}

//items
$banana = new Item('Bananas', 6, 1, 'fruit');
$apple = new Item('Apple', 3, 1.5, 'fruit');
$wine = new Item('Wine', 2, 10, 'Alcohol');

// items inside the basket

$basket = new Basket();
$basket->addItem($banana);
$basket->addItem($apple);
$basket->addItem($wine);


echo "<br> Total Tax (Fruit): €$fruitTax <br>";
echo "Total Tax (Wine): €$wineTax <br>";
echo "Total Price with Tax: €$totalPriceWithTax <br>";

