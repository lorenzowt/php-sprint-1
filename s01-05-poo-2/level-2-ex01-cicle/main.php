<?php

    require_once "Shape.php";
    require_once "Circle.php";
    require_once "Rectangle.php";
    require_once "Triangle.php";
    
    $shapes = [
        new Rectangle(4, 10),
        new Triangle(7, 2),
        new Circle(5)
    ];

    foreach($shapes as $shape) {
        echo $shape;
    }

?>