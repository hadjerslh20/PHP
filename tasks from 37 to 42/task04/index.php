<?php 
    $start = 10;
    $end = 0;
    $stop = 3;
    for(;$start>0;$start--) {
        if($start<10 ) {
            echo "0"."$start";
            echo'<br>';
            if($start==3) {
                break;
            }
        }else {
            echo $start;
            echo'<br>';
        }
    }
?>
