<?php
    $num1 = 11.5; 
    $num2 = 9.4898; 
    $num3 = -7.5;
    echo round($num1 ,0,PHP_ROUND_HALF_DOWN);
    echo '<br>';
    echo round($num2 ,1,PHP_ROUND_HALF_UP);
    echo '<br>';
    // method one 
    echo round($num3 ,0,PHP_ROUND_HALF_ODD);
    echo '<br>';
    // method two
    echo round($num3 ,0,PHP_ROUND_HALF_DOWN);
?>
