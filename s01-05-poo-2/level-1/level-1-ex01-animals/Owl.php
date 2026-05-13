<?php

require_once "Animal.php";

class Owl extends Animal {
    private const SOUND = "Hoot";

    public function speak(): string {
        return self::SOUND;
    }
}