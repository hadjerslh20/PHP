<?php 
    function displayArray($a) {
        foreach($a as $item) {
            echo $item ."<br>";
        }
    }
    displayArray([1,2,3,4,5,6,7,8,9]);
?>
