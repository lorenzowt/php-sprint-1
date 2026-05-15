<?php
require_once "ShapeInterface.php";

class Rectangle implements ShapeInterface {
    private $width;
    private $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function calculateArea(): float {
        return $this->width * $this->height;
    }

    public function __toString() : string { 
        return "\n" . get_class($this) . 
        " (width: " . $this->width . ", height: " . $this->height . ") 
        -> Area: " . number_format($this->calculateArea(), 2);
    }    
    
}