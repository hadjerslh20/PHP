<?php 
    $message = "Hello";
    $Hello = function($name) use($message) {return $message.' '.$name;};
    echo $Hello("Osama"); // Hello Osama
?>
