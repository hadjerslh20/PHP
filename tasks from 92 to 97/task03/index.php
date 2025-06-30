<?php 
    date_default_timezone_set("Africa/Cairo");
    $date = "1990-10-01";
    $days=strtotime($date)/60/60/24;
    $years =round(strtotime($date)/60/60/24/365,1);
    echo "From Epoch Time Till $date Is Approximately $days Days";
    echo "<br>";
    echo "From Epoch Time Till $date Is Approximately $years years";
?>

