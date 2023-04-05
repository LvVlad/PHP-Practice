<?php

$overtimePay = 1.50;
$basePay = 8.00;
$baseHours = 40;
$maxHours = 60;

function addWorker (string $id,float $pay,int $hours): stdClass {
    $employee = new stdClass();
    $employee->id = $id;
    $employee->pay = $pay;
    $employee->hours = $hours;
    return $employee;
}
$employees = [
    addWorker("Employee 1", 7.50, 35),
    addWorker("Employee 2", 8.20, 47),
    addWorker("Employee 3", 10.00, 73)
];

foreach ($employees as $worker) {
    if ($worker->pay < $basePay) {
        echo "{$worker->id} pay is lower than minimum wage.\n";
    } elseif ($worker->hours > $maxHours) {
        echo "{$worker->id} overworks too much.\n";
    } else {
        $salary = $worker->pay * $baseHours;
        $bonus = ($worker->hours - $baseHours) * $overtimePay;
        $total = $salary + $bonus;
        number_format($total, 2);
        echo "{$worker->id} pay this week is: $total$\n";
    }
}