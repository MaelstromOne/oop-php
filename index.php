<?php

require_once "Worker.php";

$worker = new Worker("Иван", 25, 1000);
$worker2 = new Worker("Вася", 26, 2000);

echo "Сумма зарплат Ивана и Васи " . ($worker->getSalary() + $worker2->getSalary());