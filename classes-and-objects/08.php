<?php declare(strict_types=1);

class SavingAccount
{
    private $balance;
    private $annualInterestRate;
    private $deposits;
    private $withdrawals;
    private $earnings;
    private $accountAge;
    public function __construct(float $startingBalance,float  $annualInterestRate, int $months)
    {
        $this->accountAge = $months;
        $this->balance = $startingBalance;
        $this->annualInterestRate = $annualInterestRate;
    }
    public function withdrawal(float $amount): float
    {
        $this->withdrawals += $amount;
        return $this->balance -= $amount;
    }
    public function deposit(float $amount): float
    {
        $this->deposits += $amount;
        return $this->balance += $amount;
    }
    public function addMonthlyInterest(): float
    {
        $this->earnings += ($this->annualInterestRate / 12) * $this->balance;
        return $this->balance += ($this->annualInterestRate / 12) * $this->balance;
    }
    public function displayAccount()
    {
        echo 'Total deposited: $'.number_format($this->deposits, 2).PHP_EOL;
        echo 'Total withdrawn: $'.number_format($this->withdrawals, 2).PHP_EOL;
        echo 'Interest earned: $'.number_format($this->earnings, 2).PHP_EOL;
        echo 'Ending balance: $'.number_format($this->balance, 2).PHP_EOL;
    }
}

$balance = (float) readline('How much money is in the account?: ');
$rate = (float) readline('Enter the annual interest rate: ');
$age = (int) readline('How long has the account been opened (months)?: ');

$account = new SavingAccount($balance, $rate, $age);

for ($i = 1; $i <= $age; $i++){
    $deposit = (float) readline("Enter amount deposited for month $i: ");
    $account->deposit($deposit);
    $withdrawal = (float) readline("Enter amount withdrawn for $i: ");
    $account->withdrawal($withdrawal);
    $account->addMonthlyInterest();
}

$account->displayAccount();