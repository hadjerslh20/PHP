<?php 

    function get_arguments(...$args){
        $all='';
        foreach($args as $item) {
            $all .= $item.' ';  
        }
        return $all;
    }
    echo get_arguments("Hello", "Elzero", "Web", "School");
?>
