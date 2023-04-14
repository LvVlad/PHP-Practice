<?php

class Account
{
    private string $name;
    private float $balance;
    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }
    public function deposit (float $amount): float
    {
        return $this->balance += $amount;
    }
    public function withdrawal (float $amount): float
    {
        return $this->balance -= $amount;
    }
    public function transfer (Account $to, float $amount): string
    {
        return "{$this->name} transferred - {$amount} to {$to->name}
{$this->withdrawal($amount)} - {$this->name} new balance, {$to->deposit($amount)} - {$to->name} new balance";
    }
}

$a= new Account('A', 1000);
$b= new Account('B', 0);
$c = new Account('C', 0);

echo $a->transfer($b, 50).PHP_EOL;
echo $a->transfer($c, 150).PHP_EOL;