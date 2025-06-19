<?php 
    $countNum=0;
    $countChar=0;
    $mix = [1, 2, "A", "B", "C", 3, 4];
    foreach ($mix as $item) {
        if (gettype($item)==='string'){
            $countChar+=1;
            continue;
            
        }else {
            echo $item;
            echo '<br>';
            $countNum+=1;
        }
    }
    echo "$countNum Numbers Printed";
    echo '<br>';
    echo "$countChar Letters Ignored";
?>
