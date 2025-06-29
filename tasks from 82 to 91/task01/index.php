<?php 
    echo disk_total_space("c:/")/(1024**4)."=".round(disk_total_space("c:/")/(1024**4))." Terabyte";
    echo "<br>";
    echo number_format(disk_total_space("c:/")/(1024**4),2);
?>
