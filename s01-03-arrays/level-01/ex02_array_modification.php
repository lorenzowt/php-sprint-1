<?php

    $chores = ["sweeping", "dishes", "trash", "dusting", "cooking", "toilet"];

    echo count($chores) . "\n";

    print_r($chores);

    array_splice($chores, 2, 1);

    print_r($chores);

    echo "\n" . count($chores);

?>