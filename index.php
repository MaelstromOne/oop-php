<?php

require_once "Worker.php";

$worker = new Worker();
$worker->name = "Иван";
$worker->age = 25;
$worker->salary = 1000;

$worker2 = new Worker();
$worker2->name = "Вася";
$worker2->age = 16;
$worker2->salary = 2000;

echo "<pre>";
echo "\n" . $worker->checkAge();
echo "\n" . $worker2->checkAge();