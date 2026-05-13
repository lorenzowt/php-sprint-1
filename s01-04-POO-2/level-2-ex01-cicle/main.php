<?php

    require_once "Shape.php";
    require_once "Circle.php";

    $circle1 = new Circle(5);

    echo "\nThe area of the " . get_class($circle1) . " is: " . number_format($circle1->calculateArea(), 2) . "\n";

?>