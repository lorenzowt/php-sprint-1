<?php

    function isPrime($n): bool {
        if ($n <= 1) return false;
        if ($n === 2) return true;
        if ($n % 2 === 0) return false;

        for ($i = 3; $i * $i <= $n; $i += 2) {
            if ($n % $i === 0) return false;
        }

        return true;
    }

    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    $primeSum = array_reduce($numbers, function($carry, $item) {
        if (isPrime($item)) return $carry + $item;
        else return $carry;
    });

    print_r($primeSum);

?>