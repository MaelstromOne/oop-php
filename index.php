<?php

require_once "Worker.php";

$worker = new Worker();
$worker->name = "Иван";
$worker->age = 25;
$worker->salary = 1000;

$worker2 = new Worker();
$worker2->name = "Вася";
$worker2->age = 26;
$worker2->salary = 2000;

echo "<pre>";
echo "\nСумма зарплат Ивана и Васи " . ($worker->salary + $worker2->salary);
echo "\nСумма возрастов Ивана и Васи " . ($worker->age + $worker2->age);