<?php

    $guestList1 = ["Sam", "Megan", "Carlos", "Andrei", "Almira"];
    $guestList2 = ["Andrei", "Jeff", "Alejandro", "Sam", "Almira"];

    $repeatedNames = array_intersect($guestList1, $guestList2);

    $mergedUniqueList = array_unique(array_merge($guestList1, $guestList2)); 

    $uniqueItemsList1 = array_values(array_diff($guestList1, $guestList2));
    $uniqueItemsList2 = array_values(array_diff($guestList2, $guestList1));

    print_r($repeatedNames);
    print_r($mergedUniqueList);
    print_r($uniqueItemsList1);
    print_r($uniqueItemsList2);

?>