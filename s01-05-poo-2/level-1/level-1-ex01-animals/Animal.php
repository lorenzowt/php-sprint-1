<?php

abstract class Animal {
    private $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    abstract function speak(): string;

    public function getName(): string {
        return $this->name;
    }
}