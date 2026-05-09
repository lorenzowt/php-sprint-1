<?php

getPrimes(20);

function getPrimes(int $top): void {
    $numbers = [];

    for ($counter = 2 ; $counter <= $top; $counter++) {
        $numbers[$counter] = true; 
    }

    for ($baseNumber = 2; $baseNumber < $top; $baseNumber++) {
        if ($numbers[$baseNumber]) {
            for ($counter = $baseNumber ** 2; $counter <= $top; $counter = $counter + $baseNumber) {
                if ($numbers[$counter]) {
                    $numbers[$counter] = false;
                }
            }
        }
    }

    for ($counter = 2; $counter <= $top; $counter++) {
        if ($numbers[$counter]) {
            echo $counter . " "; 
        }
    }   
}

?>