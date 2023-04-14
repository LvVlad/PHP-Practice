<?php

class BankAccount
{
    private $name;
    private $balance;
    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }
    public function showBankAccount()
    {
        if($this->balance >= 0)
        {
            return $this->name.', $'.$this->balance;
        }
        else
        {
            return $this->name.',-$'.-$this->balance;
        }
    }
}

$ben = new BankAccount('Ben', -5.20);
echo $ben->showBankAccount();