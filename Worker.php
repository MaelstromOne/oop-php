<?php

class Worker
{
    const AGE_RANGES = [18, 70];

    public $name;
    public $age;
    public $salary;

    public function checkAge(): string
    {
        if (self::AGE_RANGES[0] < $this->age && self::AGE_RANGES[1] > $this->age) {
            return "возраст входит в рамки";
        }
        else {
            return "возраст выходит в рамки";
        }
    }
}