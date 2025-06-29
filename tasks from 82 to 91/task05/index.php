<?php
    // method one
    echo basename(__FILE__);
    echo '<br>';
    // method two
    echo basename(realpath("index.php"));
    echo '<br>';
    // method three
    echo pathinfo(__FILE__,PATHINFO_BASENAME);
    echo '<br>';
    // method four
    echo pathinfo(__FILE__)['basename'];
?>


