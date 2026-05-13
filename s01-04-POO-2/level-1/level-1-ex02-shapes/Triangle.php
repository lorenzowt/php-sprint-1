<?php
require_once "Shape.php";

class Triangle extends Shape {
    
    public function calculateArea(): float {
        return 0.5 * $this->getWidth() * $this->getHeight();
    }
}