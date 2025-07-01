<?php 
    if(isset($_COOKIE["site"]) ) {
        echo '<pre>';
        print_r(["Site" => $_COOKIE['site']]);
        echo '</pre>';  
        echo "<br>";
        $keys = array_keys($_COOKIE["site"]);
        echo "Your $keys[2] is ".$_COOKIE["site"][$keys[2]]."And Your $keys[1] ".$_COOKIE["site"][$keys[1]].".";
    }
    setcookie("site[layout]","boxed",strtotime("+ 2months 5days"),"/");
    setcookie("site[font]","swat",strtotime("+ 2months 5days"),"/");
    setcookie("site[color]","blue",strtotime("+ 2months 5days"),"/");
?>
