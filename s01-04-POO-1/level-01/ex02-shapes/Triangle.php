<?php
require_once "Shape.php";

class Triangle extends Shape {
    public function calculateArea():int {
        return 0.5 * $this->getWidth() * $this->getHeight();
    }
}

$triangle = new Triangle(5, 10);
echo $triangle->calculateArea();