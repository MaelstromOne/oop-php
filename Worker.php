<?php

class Worker
{
    private const AGE_RANGES = [18, 70];

    public $name;
    public $age;
    public $salary;

    public function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;

        $this->checkAge();
    }

    public function checkAge()
    {
        if (self::AGE_RANGES[0] > $this->age || self::AGE_RANGES[1] < $this->age) {
            trigger_error("Возраст не входит в диапозон", E_USER_WARNING);
        }
    }
}