<?php 
    $nums = [5, 10, 20, 5, 30, 40];
    $filt_array = array_filter($nums, function($n) {
        return $n!=5;
    });
    // method one 
    echo array_sum($filt_array);
    echo '<br>';
    // method two
    $result=0;
    echo array_reduce($filt_array,function($result,$i) {
            $result+=$i;
            return $result;
    },0);
?>
