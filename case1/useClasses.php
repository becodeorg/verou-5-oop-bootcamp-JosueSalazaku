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

class Basket {
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
    

}


echo " <br>Hello world <br>";

