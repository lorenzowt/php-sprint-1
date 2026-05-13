<?php
require_once "Shape.php";

class Circle extends Shape {
    private $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }
    
    public function calculateArea(): float {
        return pi() * ($this->radius ** 2);
    }
}