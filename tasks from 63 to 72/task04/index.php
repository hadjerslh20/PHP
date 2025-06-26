<?php 
    $nums = [10, 20, 30];
    // method one
    echo array_sum($nums);
    echo '<br>';
    // method two (lambda funct)
    $final= array_reduce($nums,function($result,$n) {
        $result+=$n;
        return $result;
    },0);
    echo $final;
    // method three (normal function)
    echo '<br>';
    function sumArr($result,$i) {
        return $result+=$i;
    }
    $finall = array_reduce($nums ,'sumArr',0);
    echo $finall;
?>
