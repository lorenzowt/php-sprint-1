<?php

    require_once "Animal.php";
    require_once "Cat.php";
    require_once "Owl.php";
    require_once "Snake.php";

    $animals = [
    new Cat("Mimi"),
    new Owl("McOwl"),
    new Snake("Arbok"),
    ];

    foreach ($animals as $animal) {
        echo "\n" . $animal->getName() . " (" . get_class($animal) . "): " . $animal->speak() . "!\n";
    }
    
?>