<?php 
    $greet = function($name) { return "Hello $name";};
    echo $greet("Hadjer");
    // arrow function
    echo '<br>';
    $greet = fn($name) => "Hello $name";
    echo $greet("Hadjer");
?>
