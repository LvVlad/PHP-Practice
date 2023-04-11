<?php

class Data
{
    private $day;
    private $month;
    private $year;
    public function __construct(int $day, int $month, int $year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }
    public function DisplayData()
    {
        return "{$this->day}/{$this->month}/{$this->year}";
    }
}

$data1 = new Data(24,06,2023);
echo $data1->DisplayData();