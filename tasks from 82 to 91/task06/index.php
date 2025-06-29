<?php
    // method one
    echo file_get_contents("elzero.txt",false,null,0,strlen('Hello Elzero Web School')+1);
    echo '<br>';
    // method two 
    echo file("elzero.txt")[0]." ".file("elzero.txt")[1];
    echo '<br>';
    // method three 
    $openedFile = fopen('elzero.txt','r');
    echo fread($openedFile,strlen('Hello Elzero Web School')+1);
    echo '<br>';
    // method four 
    rewind($openedFile);
    echo fgets($openedFile) . " " . fgets($openedFile);
    fclose($openedFile);
?>


