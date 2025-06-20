<?php 
    function check_status($a, $b, $c) {
    if(gettype($a)=='string'){
        if(gettype($b)=='integer' and gettype($c)=='boolean'){
            if($c== true) {
                return "Hello $a, Your Age Is $b, You Are Available For Hire";
            }else {
                return "Hello $a, Your Age Is $b, You Are Not Available For Hire";
            }
        }elseif(gettype($c)=='integer' and gettype($b)=='boolean'){
            if($b== true) {
                return "Hello $a, Your Age Is $c, You Are Available For Hire";
            }else {
                return "Hello $a, Your Age Is $c, You Are Not Available For Hire";
            }
        }
    }elseif(gettype($a)=='integer'){
        if(gettype($b)=='string' and gettype($c)=='boolean'){
            if($c== true) {
                return "Hello $b, Your Age Is $a, You Are Available For Hire";
            }else {
                return "Hello $b, Your Age Is $a, You Are Not Available For Hire";
            }
        }elseif(gettype($c)=='string' and gettype($b)=='boolean'){
            if($b== true) {
                return "Hello $c, Your Age Is $a, You Are Available For Hire";
            }else {
                return "Hello $c, Your Age Is $a, You Are Not Available For Hire";
            }
        }

    }elseif(gettype($a)=='boolean'){
        if($a== true) {
            if (gettype($c)=='string' and gettype($b)=='integer') {
                return "Hello $c, Your Age Is $b, You Are Available For Hire";
            }elseif(gettype($c)=='integer' and gettype($b)=='string') {
                return "Hello $b, Your Age Is $c, You Are Available For Hire";
            }
        }else {
            if (gettype($c)=='string' and gettype($b)=='integer') {
                return "Hello $c, Your Age Is $b, You Are Available For Hire";
            }elseif(gettype($c)=='integer' and gettype($b)=='string') {
                return "Hello $b, Your Age Is $c, You Not Are Available For Hire";
            }
        }

    }
}
echo check_status("Osama", 38, true); 
echo '<br>';
echo check_status(38, "Osama", true); 
echo '<br>';
echo check_status(true, 38, "Osama"); 
echo '<br>';
echo check_status(false, "Osama", 38); 
?>
