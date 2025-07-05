<?php 
    function myhandler($erNum,$erStr,$erFile,$erLine) {
        if($erNum== E_USER_ERROR) {
            echo "<p style='color:red ; font-weight:bold;'>$erNum:$erStr in $erFile file in line $erLine</p>"."<br>";
        }elseif($erNum== E_USER_WARNING) {
            echo "<p style='color:orange ; font-weight:bold;'>$erNum:$erStr in $erFile file in line $erLine</p>"."<br>";
        }elseif($erNum== E_USER_NOTICE) {
            echo "<p style='color:blue ; font-weight:bold;'>$erNum:$erStr in $erFile file in line $erLine</p>"."<br>";
        }else {
            echo "<p style='color:grey ; font-weight:bold;'>$erNum:$erStr in $erFile file in line $erLine</p>"."<br>";
        }
    }
    set_error_handler("myhandler");
    trigger_error("Just a notice.", E_USER_NOTICE);
    trigger_error("This is a warning.", E_USER_WARNING);
    trigger_error("Fatal error occurred.", E_USER_ERROR);

?>

