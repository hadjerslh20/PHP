<?php 
    $str = 'aAa';
    $num = 3;
    $char = "_";
    // method one
    echo str_repeat(strtolower($str."$char"),$num);
    echo '<br>';
    // method two 
    echo str_repeat(strtolower(str_pad($str,4,$char)),$num);
?>
