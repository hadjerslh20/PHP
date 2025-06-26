<?php 
    $chars = ["A", "B", "C", "D", "E"];
    $char = "@@";
    $zero = 0;
    // method one 
    array_push($chars,$char[$zero],$char[$zero],$char[$zero],$char[$zero],$char[$zero]);
    echo '<pre>';
    print_r($chars);
    echo '</pre>';
    // method two 
    echo '<br>';
    $chars = ["A", "B", "C", "D", "E"];
    $char = "@@";
    $zero = 0;
    for($i=0;$i<5;$i++):
        array_push($chars,$char[$zero]);
    endfor;
    echo '<pre>';
    print_r($chars);
    echo '</pre>';
    // method three 
    echo '<br>';
    $chars = ["A", "B", "C", "D", "E"];
    $char = "@@";
    $zero = 0;
    $addArr = array_fill(5,5,$char[$zero]); // to generate a new array
    array_splice($chars,5,5,$addArr);
    echo '<pre>';
    print_r($chars);
    echo '</pre>';
?>
