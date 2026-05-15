<?php

    interface ShapeInterface {
        public function calculateArea(): float;
        
        public function __toString(): string;
    }