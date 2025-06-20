<?php 
    $help_num = 4;
    $nums = [2, 4, 5, 6, 10];
    $rev_nums= array_reverse($nums);
    foreach($nums as $key => $num){
        echo "$num + ".$rev_nums[$key]." = ".($num+$rev_nums[$key]);
        echo '<br>';
    }
?>
