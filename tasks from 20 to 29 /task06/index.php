<?php
    $a = "Elzero";
    $b = "Web";
    $c = "School";
    // method one
    $d= $a.' '.$b.' '.$c; 
    echo $d;
    echo '<br>';
    // method two
    $d='';
    $d.=$a.' ';
    $d.=$b.' ';
    $d.=$c;
    echo $d;
    // method three
    echo '<br>';
    $d="$a $b $c";
    echo $d;
    // method four 
    echo '<br>';
    $d=sprintf("%s %s %s", $a, $b, $c);
    echo $d;
?>
