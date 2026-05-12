<?php

    function calculateAverageScore(array $students): void {
        
        $classTotal = 0;
        $scoresCount = 0;

        foreach($students as $name => $studentGrades) {
            
            $studentAverage = array_sum($studentGrades) / count($studentGrades);

            echo $name . " -> Average score: " . $studentAverage . "\n";

            $classTotal += array_sum($studentGrades);
            $scoresCount += count($studentGrades);
        }

        echo "Class average: " . round(($classTotal / $scoresCount), 1);
    }

    $students = [

    "Manon" => [8, 8, 9, 9, 10],

    "Danieal" => [5, 6, 7, 8, 6],

    "Lara" => [9, 9, 8, 10, 9],

    "Sophia" => [4, 5, 6, 5, 7],

    "Yoonchae" => [10, 9, 10, 8, 9],

    "Megan" => [6, 7, 5, 8, 6],

];

    calculateAverageScore($students);

?>