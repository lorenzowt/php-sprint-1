<?php

class PokerDie{
    private $sides = ["As", "K", "Q", "J", "7", "8"];
    private $throwCounter = 0;
    private $currentSideUP = 0;
    private static $totalThrowCounter = 0;

    public function throwDie() {
        $this->throwCounter++;
        PokerDie::$totalThrowCounter++;
        $this->currentSideUP = rand(0, 5);
    }

    public function showSideUp(): string {
        return $this->sides[$this->currentSideUP];
    }

    public function getThrowCounter(): int {
        return $this->throwCounter;
    }

    public static function getTotalThrowCounter(): int {
        return PokerDie::$totalThrowCounter;
    }
    
}