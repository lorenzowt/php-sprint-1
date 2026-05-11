<?php

    function validatePositive(int $top, int $step): void {
        if ($top < 1) {
            throw new InvalidArgumentException("Top must be bigger than 0");
        }

        if ($step < 1) {
            throw new InvalidArgumentException("Step must be bigger than 0");
        }
    }


    function countUpTo(int $top = 10, int $step = 1): void {
        validatePositive($top, $step);
        for ($current = 1; $current <= $top; $current += $step) {
            echo $current . "\n";
        }
    }

    countUpTo(24, 2);
?>