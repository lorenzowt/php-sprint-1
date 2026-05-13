<?php

    require_once "Shape.php";
    require_once "Rectangle.php";
    require_once "Triangle.php";

    $shapes = [
        new Rectangle(4, 10),
        new Triangle(7, 2)
    ];

    foreach ($shapes as $shape) {
        echo "\nThe area of the " . get_class($shape) . " is: " . $shape->calculateArea() . "\n";
    }

?>