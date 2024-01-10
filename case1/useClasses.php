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
        $this->item[] = $item;

    }

    public function totalTax() 
    {
        $fruitTaxRate = 0.06;
        $wineTaxRate = 0.21;
        $fruitTax = 0;
        $wineTax = 0;

        foreach ($this->item = $item) {
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
}


echo " <br>Hello world <br>";

