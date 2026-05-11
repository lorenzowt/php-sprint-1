<?php

    $names = ["Sam", "Megan", "Carlos", "Andrei", "Cris"];

    $evenNames = array_values(array_filter($names, function($name) {
        return strlen($name) % 2 === 0;
    }));

    print_r($evenNames);

?>