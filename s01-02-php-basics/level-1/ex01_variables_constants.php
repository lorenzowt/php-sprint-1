<?php

$integer = 10;
$string = "Hello World";
$double = 3.14;
$boolean = true;

echo "Integer: $integer\n";
echo "String: $string\n";
echo "Double: $double\n";
echo "Boolean: " . ($boolean ? "true" : "false") . "\n";

define("NAME", "Lorenzo Marco");

echo "Constant NAME: " . NAME;

?>