<?php 
    function multiply(...$args) {
        $result=1;
        foreach ($args as $item):
            if(gettype($item)==='string') {
                continue;
            }elseif(gettype($item)==='double'){
                $item = (int)$item;
                $result*=$item;
            }else {
                $result*=$item;
            }
        endforeach;
        return $result;
    }
    echo multiply(10, 20);
    echo '<br>';
    echo multiply("A", 10, 30);
    echo '<br>';
    echo multiply(100.5, 10, "B");
?>
