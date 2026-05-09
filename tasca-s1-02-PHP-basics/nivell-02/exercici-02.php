<?php

    runProgram(9999, 0, 4500);
    
    function runProgram(int $score1, int $score2, int $score3): void {
        validateScores($score1, $score2, $score3);
        echo "The sum of $score1, $score2 and $score3 equals: " . sumScores($score1, $score2, $score3) . "\n";
        echo "The average score of $score1, $score2 and $score3 is: " . calculateAverageScore($score1, $score2, $score3) . "\n";
        echo "$score1: " . classifyScore($score1) . "\n";
        echo "$score2: " . classifyScore($score2) . "\n";
        echo "$score3: " . classifyScore($score3) . "\n";
    }

    function sumScores(int $score1, int $score2, int $score3): int {
        return $score1 + $score2 + $score3;
    }

    function calculateAverageScore(int $score1, int $score2, int $score3): int {
        return $score1 + $score2 + $score3 / 3;
    }

    function classifyScore(int $score): string {
        if ($score < 4000) {
            return "Beginner";
        }
        elseif ($score < 8000) {
            return "Intermediate";
        }

        else {
            return "Professional";
        }
    }

    function validateScores(int $score1, int $score2, int $score3): void {
        $minScore = 0;
        $maxScore = 9999;

        if ($score1 < $minScore || $score2 < $minScore || $score3 < $minScore){
            throw new InvalidArgumentException("Scores can't be negative");
        }

        if ($score1 > $maxScore || $score2 > $maxScore|| $score3 > $maxScore){
            throw new InvalidArgumentException("Scores can't be higher than 9999");
        }
    }

    
?>