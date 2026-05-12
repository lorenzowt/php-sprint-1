<?php

    function isBitten(): bool {
        return rand(0,1);
    }

    for ($i = 0; $i < 10; $i++){
        echo "\n" . (isBitten() ? "it bit you" : "it didn't bite you");
    }
?>