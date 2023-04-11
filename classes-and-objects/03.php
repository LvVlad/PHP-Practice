<?php

class Car
{
    private $fuelDisplay;
    private $odometer;
    public function __construct(Fuel $fuelDisplay, Odometer $odometer)
    {
        $this->fuelDisplay = $fuelDisplay;
        $this->odometer = $odometer;
    }
    public function GetData():string
    {
        return $this->fuelDisplay->lookFuel().$this->odometer->lookOdometer();
    }
    public function fillUp()
    {
        do
        {
            $this->fuelDisplay->addFuel();
        }
        while($this->fuelDisplay->fuel < $this->fuelDisplay->tank);
    }
    public function drive()
    {
        do
        {
            if ($this->odometer->addDistance() % 10 == 0)
            {
                $this->fuelDisplay->burnFuel();
            }
            $this->odometer->addDistance();
            echo $this->GetData();
        }
        while($this->fuelDisplay->fuel > 0);
    }
}

class Fuel
{
    public $fuel;
    public $tank;
    public function __construct(int $liters, int $maxLiters)
    {
        $this->fuel = $liters;
        $this->tank =$maxLiters;
    }
    public function lookFuel()
    {
        return $this->fuel.'l / '.$this->tank.'l'.PHP_EOL;
    }
    public function addFuel()
    {
        if($this->fuel >= $this->tank)
        {
            return 'Warning!! Risk of overfilling'.PHP_EOL;
        }
        else
        {
            return $this->fuel++.PHP_EOL;
        }
    }
    public function burnFuel()
    {
        if($this->fuel > 0)
        {
            return $this->fuel--;
        }
        else
        {
            return 'Low on fuel.'.PHP_EOL;
        }
    }
}

class Odometer
{
    public $distance;
    public $maxDisplay;
    public function __construct(int $distance, int $maxDisplay)
    {
        $this->distance =$distance;
        $this->maxDisplay = $maxDisplay;
    }
    public function lookOdometer():string
    {
        return $this->distance.'km / '.$this->maxDisplay.'km'.PHP_EOL;
    }
    public function addDistance()
    {
        if($this->distance >= $this->maxDisplay)
        {
            return $this->distance = 1;
        }
        else
        {
            return $this->distance++;
        }
    }
}

$fuel1 = new Fuel(10, 70);
$odometer1 = new Odometer(10, 999999);
$car1 = new Car($fuel1, $odometer1);
echo $car1->GetData();
$car1->fillUp();
echo $car1->GetData();
$car1->drive();