<?php

require_once "Animal.php";

class Snake extends Animal {
    private const SOUND = "Hiss";

    public function speak(): string {
        return self::SOUND;
    }
}