<?php

    function validateDivisor($secondNumber){
        if ($secondNumber === 0) {
            throw new InvalidArgumentException("Cannot divide by zero");
        }
    }

    function calculate(int|float $firstNumber, int|float $secondNumber, string $operator): int|float {
        
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

    try{ 
        echo calculate(2, 4, "aDd") . "\n";
        echo calculate(3.0, 5.1, "subtraCt"). "\n";
        echo calculate(3.0, 3.0, "MULTIPLY  "). "\n";
        echo calculate(4, 5, "  divide"). "\n";
        echo calculate(4, 0, "divide");
        echo calculate(2, 0, "subtract");
        echo calculate(2, 0, "divide");
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }

?>