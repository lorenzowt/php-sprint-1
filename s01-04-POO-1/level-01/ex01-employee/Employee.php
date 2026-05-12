<?php

class Employee {
    private $name;
    private $salary;
    private const TAX_MIN_LIMIT = 6000;
    
    public function __construct(string $name, float $salary) {
        //ADD VALIDATIONS
        $this->name = $name;
        $this->salary = $salary;
    }

    public function checkTax():void {
        if ($this->salary > self::TAX_MIN_LIMIT) {
            echo $this->name . " MUST pay taxes";
        }

        else {
            echo $this->name . " DOESN'T HAVE TO pay taxes";
        }
    }
}

    $example = new Employee("Lorenzo", 5000);
    $example->checkTax();
