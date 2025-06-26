<?php
    // method one 
    $chars = ["o", "r", "e", "z", "l", "E"];
    $str="";
    for($i=0; $i<6;$i++):
        $str= $str."".array_pop($chars);
    endfor;
    echo $str;
    echo '<br>';
    // method two 
    $chars = ["o", "r", "e", "z", "l", "E"];
    $str1="";
    for ($i=5; $i>=0;$i--):
        $str1=$str1."".$chars[$i];
    endfor;
    echo $str1;
?>
