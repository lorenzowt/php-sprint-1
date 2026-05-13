<?php

require_once "Animal.php";

class Cat extends Animal {
    private const SOUND = "Meow";

    public function speak(): string {
        return self::SOUND;
    }
}