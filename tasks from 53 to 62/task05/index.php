<?php 
    $str = "Elzero Web School";
    $e = "e";
    $o = "O";
    $four = 4;
    echo substr_count($str,$e,$four);
    echo '<br>';
    echo substr_count(substr($str,-4),strtolower($o));
?>
