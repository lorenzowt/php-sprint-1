<?php

    function calculateCallPrice(int $callMinutes): int {

        validateCallMinutes($callMinutes);

        $minCost = 10;
        $costPerMinute = 5;

        if ($callMinutes <= 3) {
            return $minCost;
        }
        else {
            return $minCost + (($callMinutes - 3 ) * $costPerMinute);
        }
    }

    function validateCallMinutes(int $callMinutes): void {
        if ($callMinutes <= 0) {
            throw new InvalidArgumentException("Call length must be bigger than 0");
        }
    }
    
    echo calculateCallPrice(2) . "\n";
    echo calculateCallPrice(1) . "\n";
    echo calculateCallPrice(4) . "\n";
    echo calculateCallPrice(5) . "\n";
    echo calculateCallPrice(0) . "\n";
?>