<?php 
    $names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];
    next($names).'<br>';
    next($names).'<br>';
    echo current($names) . "<br>";
    end($names).'<br>';
    echo current($names) . "<br>";
    reset($names).'<br>';
    echo current($names) . "<br>";
    end($names).'<br>';
    prev($names).'<br>';
    echo current($names) . "<br>";
?>
