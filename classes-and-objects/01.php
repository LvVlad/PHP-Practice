<?php

class Product {

    private $name;
    private $startPrice;
    private $amount;

    public function __construct(string $name, float $startPrice, int $amount)
    {
        $this->name = $name;
        $this->startPrice = $startPrice;
        $this->amount = $amount;
    }

    public function printProduct(): string {
        $price = number_format($this->startPrice, 2);
        return "{$this->name}, {$price} EUR, {$this->amount} units";
    }

    public function changePrice(float $newPrice){
        $this->startPrice = $newPrice;
    }

    public function changeAmount(int $newAmount){
        $this->amount = $newAmount;
    }
}

$mouse = new Product("Logitech mouse", 70.00, 14);
$phone = new Product("iPhone 5s", 999.99, 3);
$projector = new Product("Epson EB-U05", 440.46, 1);

$phone->changePrice(599.99);
$projector->changeAmount(88);

echo $mouse->printProduct().PHP_EOL;
echo $phone->printProduct().PHP_EOL;
echo $projector->printProduct().PHP_EOL;