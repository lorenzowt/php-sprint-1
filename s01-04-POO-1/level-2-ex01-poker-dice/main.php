<?php

require_once "PokerDie.php";

    $dice = createDice(5);

    throwAllDice($dice);

    throwRandomDice($dice, 5);

    showThrowCounterPerDice($dice);
    
    function createDice(int $diceCount): array {
        $dice = [];

        for ($i = 0; $i < $diceCount; $i++) {
        $dice[] = new PokerDie();
        }
        
        return $dice;
    }

    function throwAllDice(array $dice): void {

        echo "\nThrowing " . count($dice) . " dice at the same time:\n";

        foreach ($dice as $index => $die) {
            $die->throwDie();
            echo "Die " . $index + 1 . ": " . $die->showSideUp() . "\n";
        }
    }

    function throwRandomDice(array $dice, int $count): void {
        echo "\nThrowing random dice now:\n";

        for($i = 0; $i < $count; $i++) {
            $dieIndex = rand(1, $count) - 1;
            $dice[$dieIndex]->throwDie();

            echo "Die " . ($dieIndex + 1) . ": " . $dice[$dieIndex]->showSideUp() . "\n";
        }
    }

    function showThrowCounterPerDice(array $dice): void {
        echo "\nThrow Counter per dice:\n";

        foreach ($dice as $index => $die) {
        echo "Die " . ($index + 1) . " throw count: " . $die->getThrowCounter() . "\n";
        }
    }

?>