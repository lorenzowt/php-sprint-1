<?php

    function assignDivision(int $mark): string {
        if ($mark >= 60) {
            return "First Division";
        }
        elseif ($mark >= 45) {
            return "Second Division";
        }
        elseif ($mark >= 33) {
            return "Third Division";
        }
        else {
            return "Failed";
        }
    }

    echo assignDivision(71);
    echo assignDivision(45);
    echo assignDivision(33);
    echo assignDivision(32);
?>