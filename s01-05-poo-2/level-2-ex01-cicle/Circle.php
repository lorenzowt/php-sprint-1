<?php
require_once "ShapeInterface.php";

class Circle implements ShapeInterface {
    private $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }
    
    public function calculateArea(): float {
        return pi() * ($this->radius ** 2);
    }

    public function __toString() : string { 
        return "\n" . get_class($this) . " (radius: " . $this->radius . ") 
        -> Area: " . number_format($this->calculateArea(), 2);
    }
}