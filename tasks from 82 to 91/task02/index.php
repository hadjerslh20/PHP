<?php
    $path='C:\Users\hadje\Desktop\templateOne\index.html';
    if(file_exists($path)){
        echo "Size in Bytes :".filesize($path)."<br>";
        echo "Size in MegaBytes :".filesize($path)/(1024**2)."<br>";
        echo "Size in KiloBytes :".filesize($path)/(1024)."<br>";
    }else {
        echo "file doesn't exist";
    }
    
?>
