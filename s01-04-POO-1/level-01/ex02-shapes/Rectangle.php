<?php
require_once "Shape.php";

class Rectangle extends Shape {
    public function calculateArea():int {
        return $this->getWidth() * $this->getHeight();
    }
}

$rectangle = new Rectangle(5, 10);
echo $rectangle->calculateArea();