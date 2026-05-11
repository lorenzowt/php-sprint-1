<?php

    function validateDivisor($secondNumber){
        if ($secondNumber === 0) {
            throw new InvalidArgumentException("Cannot divide by zero");
        }
    }

    function Operations(int|float $firstNumber, int|float $secondNumber, string $operator): int|float {
        
        $operator = strtolower(trim($operator));

        switch ($operator) {
            case "add":
                return $firstNumber + $secondNumber;
                break;

            case "subtract":
                return $firstNumber - $secondNumber;
                break;
            
            case "multiply":
                return $firstNumber * $secondNumber;
                break;

            case "divide":
                validateDivisor($secondNumber);
                return $firstNumber / $secondNumber;
                break;
            
            default:
                throw new InvalidArgumentException("$operator is not a valid operation");
                break;
        }

    }

     // Tests 
    echo Operations(2, 4, "aDd") . "\n";
    echo Operations(3.0, 5.1, "subtraCt"). "\n";
    echo Operations(3.0, 3.0, "MULTIPLY  "). "\n";
    echo Operations(4, 5, "  divide"). "\n";
    // divide by 0 echo Operations(4, 0, "divide");
    // invalid operation echo Operations(2, 4, "22");

?>