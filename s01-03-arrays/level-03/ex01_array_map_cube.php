<?php

    $numbers = [1, 2, 3, 4];

    $cubedNumbers = array_map(fn($i) => $i ** 3, $numbers);

    print_r($cubedNumbers);

?>