<?php

require_once "PokerDie.php";


    $dice = [];

    for ($i = 0; $i < 5; $i++) {
        $dice[] = new PokerDie();
    }

    echo "\nThrowing " . count($dice) . " dice at the same time:\n";

    foreach ($dice as $index => $die) {
        $die->throwDie();
        echo "Die " . $index + 1 . ": " . $die->showSideUp() . "\n";
    }

    echo "\nThrowing random dice now:\n";

    for($i = 0; $i < 5; $i++) {
        $dieIndex = rand(0, 4);
        $dice[$dieIndex]->throwDie();
       ;
        echo "Die " . ($dieIndex + 1) . ": " . $dice[$dieIndex]->showSideUp() . "\n";
    }

    echo "\nThrow Counter per dice:\n";

    foreach ($dice as $index => $die) {
        echo "Die " . ($index + 1) . " throw count: " . $die->getThrowCounter() . "\n";
    }

?>