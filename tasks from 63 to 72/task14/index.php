<?php
    $nums = [10, 100, -20, 50, 30];
    $min= $nums[0];
    for($i=0; $i<count($nums,COUNT_NORMAL);$i++) :
        if($min > $nums[$i]) {
            $min = $nums[$i];
        }
    endfor;
    echo $min;
?>
