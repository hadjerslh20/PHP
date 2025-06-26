<?php
    $nums = [11, 2, 100, 7, 20, 50];
    $max= $nums[0];
    for($i=0; $i<count($nums,COUNT_NORMAL);$i++) :
        if($max < $nums[$i]) {
            $max = $nums[$i];
        }
    endfor;
    echo $max;
?>
