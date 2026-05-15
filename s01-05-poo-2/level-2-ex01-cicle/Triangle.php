<?php
require_once "ShapeInterface.php";

class Triangle implements ShapeInterface {
    private $base;
    private $height;

    public function __construct(float $base, float $height) {
        $this->base = $base;
        $this->height = $height;
    }
    public function calculateArea(): float {
        return 0.5 * $this->base * $this->height;
    }

    public function __toString() : string { 
        return "\n" . get_class($this) . 
        " (base: " . $this->base . ", height: " . $this->height . ") 
        -> Area: " . number_format($this->calculateArea(), 2);
    }   
}