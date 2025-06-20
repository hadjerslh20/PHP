<?php 
    function greeting($name , $gender='none'){
        if ($gender == 'none') {
            return "Hello $name";
        }else {
            if($gender=='Male' or $gender=='male'){
                return "Hello Mr $name";
            }else {
                return "Hello Miss $name";
            }
        }
    }
    echo greeting("Hadjer");
    echo '<br>';
    echo greeting("Hadjer",'Female');
    echo '<br>';
    echo greeting("Mohammed",'male');
?>
