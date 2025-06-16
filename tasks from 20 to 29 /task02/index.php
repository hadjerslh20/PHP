<?php
    
    $a = "10";
    echo +$a;
    echo '<br>';
    echo gettype(+$a);
    echo '<br>';
    echo (int)$a;
    echo '<br>';
    echo gettype((int)$a);
    echo '<br>';
    echo -$a * -1;
    echo '<br>';
    echo gettype(-$a * -1);
    echo '<br>';
    echo intval($a);
    echo '<br>';
    echo gettype(intval($a));
    echo '<br>';
    $b = $a;
    settype($b, "integer");
    echo $b;
    echo '<br>';
    echo gettype($b);
?>
