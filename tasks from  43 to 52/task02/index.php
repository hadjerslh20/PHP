<?php 
    // method one
    function get_argumentsOne(...$args){
        $all='';
        foreach($args as $item) {
            $all .= $item.' ';  
        }
        /*print_r(func_get_args());
        echo '<br>';
        print_r($args);
        echo '<br>';*/
        return $all;
    }
    echo get_argumentsOne("Hello", "Elzero", "Web", "School");
    echo '<br>';
    // method two 
    function get_argumentsTwo() {
        $all ='';
        foreach(func_get_args() as $item ):
            $all .= $item.' ';
        endforeach;
        return $all;
    }
    echo get_argumentsTwo("I", "Love", "PHP");
    
?>
