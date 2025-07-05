<?php 
    function myhandler($erNum,$erStr,$erFile,$erLine) {
        echo "$erNum:$erStr in $erFile file in line $erLine";
    }
    set_error_handler("myhandler");
    $age = -9;
    if ($age < 0 || $age > 120) {
    trigger_error("Not valid age:", E_USER_WARNING);
}
?>

