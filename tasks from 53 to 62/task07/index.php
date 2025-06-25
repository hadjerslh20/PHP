<?php 
    $chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
    $newarr=[];
    foreach ($chars as $item):
        if($item==1 or $item==2) {
            continue;
        }else {
            $newarr[] = $item;
        }
    endforeach;
    echo ucfirst(strtolower(implode($newarr)));
?>
