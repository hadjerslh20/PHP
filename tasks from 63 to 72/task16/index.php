<?php
    $mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
    $oddNum=[];
    foreach($mix as $item):
        if (ord($item)>=65 and ord($item) <= 90 ){
            continue;
        }else{
            if($item%2 == 0) {
                continue;
            }else {
                $oddNum[]= $item;
            }
        }
    endforeach;
    print_r($oddNum);
?>
