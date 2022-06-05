<?php 
    include_once 'index.php';

    class Equation{


    
        
        function Summation($a, $b){
            global $numOne, $numTwo; 
            echo "Summation of $numOne and $numTwo : " . ($a + $b) . "<br>";
        }

        function Divission($a, $b){
            global $numOne, $numTwo; 
            echo "Divission of $numOne and $numTwo : " . ($a / $b) . "<br>";
        }

        function Multiplication($a, $b){
            global $numOne, $numTwo; 
            echo "Multiplication of $numOne and $numTwo : " . ($a * $b) . "<br>";
        }

        function Subtraction($a, $b){
            global $numOne, $numTwo; 
            echo "Subtraction of $numOne and $numTwo : " . ($a - $b) . "<br>";
        }
    }
?>