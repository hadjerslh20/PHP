<?php
    // method one
    $chars = ["A", "B", "C"];
    $chars[3]= "D";
    echo "<pre>";
    print_r($chars);
    echo "</pre>";
    echo "<br>";
    // method two
    $chars = ["A", "B", "C"];
    array_push($chars,"D");
    echo "<pre>";
    print_r($chars);
    echo "</pre>";
    echo "<br>";
    // method three
    $chars = ["A", "B", "C"];
    array_splice($chars,3,4,"D");
    echo "<pre>";
    print_r($chars);
    echo "</pre>";
    echo "<br>";
    // method four
    $chars = ["A", "B", "C"];
    $chars[]= "D";
    echo "<pre>";
    print_r($chars);
    echo "</pre>";
    echo "<br>";
?>
