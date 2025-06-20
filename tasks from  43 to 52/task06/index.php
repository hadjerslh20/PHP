<?php 
    function calculate($numOne,$numTwo,$op="a" or $op=="addition"){
        if($op=="a" or $op=="addition") {
            return $numOne + $numTwo;
        }elseif($op=="s" or $op=="subtract") {
            return $numOne - $numTwo;
        }elseif($op=="m" or $op=="multiply") {
            return $numOne * $numTwo;
        }else{
            return "error: this operation doesn't exist";
        }
    }
    echo calculate(10, 20); 
    echo "<br>";
    echo calculate(10, 20, "a"); 
    echo "<br>";
    echo calculate(10, 20, "s"); 
    echo "<br>";
    echo calculate(10, 20, "subtract"); 
    echo "<br>";
    echo calculate(10, 20, "multiply"); 
    echo "<br>";
    echo calculate(10, 20, "m"); 
?>
