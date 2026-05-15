<?php

require_once "PokerDie.php";

class GameBoard {

    private array $dice = [];

    public function __construct(int $diceCount = 5) {
        $this->createDice($diceCount);
    }
    
    public function createDice(int $diceCount){
        for ($i = 0; $i < $diceCount; $i++) {
            $this->dice[] = new PokerDie();
        }
    }

    function throwAllDice(){

        echo "\nThrowing " . count($this->dice) . " dice at the same time:\n";

        foreach ($this->dice as $index => $die) {
            $die->throwDie();
            echo "Die " . ($index + 1) . ": " . $die->showSideUp() . "\n";
        }
    }

    function throwRandomDice(int $count = 5 ){
        echo "\nThrowing random dice now:\n";

        for($i = 0; $i < $count; $i++) {
            $dieIndex = rand(1, count($this->dice)) - 1;
            $this->dice[$dieIndex]->throwDie();

            echo "Die " . ($dieIndex + 1) . ": " . 
            $this->dice[$dieIndex]->showSideUp() . "\n";
        }
    }

    function showThrowCounterPerDice(){
        echo "\nThrow Counter per dice:\n";

        foreach ($this->dice as $index => $die) {
        echo "Die " . ($index + 1) . " throw count: " . 
        $die->getThrowCounter() . "\n";
        }

        echo "\nTotal Throw Counter: " . PokerDie::getTotalThrowCounter();
    }
}
