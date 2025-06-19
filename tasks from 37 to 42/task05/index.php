<?php 
    $start = 0;
    $mix = [1, 2, 3, "A", "B", "C", 4];
    for(;$start<7;$start++){
        if($mix[$start]==1 or $mix[$start]=="A" or $mix[$start]=="B" or $mix[$start]=="C"){
            continue;
        }else {
            echo $mix[$start];
            echo '<br>';
        }
    }
?>
