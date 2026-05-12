<?php

    function searchCharacter(array $wordList, string $char): bool {
        $charFound = false;  

        foreach ($wordList as $word) {
            if (!str_contains($word, $char)) {
                return false;
            }
        }
        return true;
    } 

    $wordList = ["archer", "mage", "tank"];
    $char = "b";
    
    echo (searchCharacter($wordList, $char) ? "True" : "False");

?>