<?php 
    date_default_timezone_set("Africa/Cairo");
    $date = "1990-10-01";
    $diff = date_diff(date_create($date),date_create("1970-01-01"));
    $days =$diff->d + ($diff->y)*365 + ($diff->m)*30;
    $years = $diff->y;
    echo "From Epoch Time Till $date Is Approximately $days Days.";
    echo '<br>';
    echo "From Epoch Time Till $date Is Approximately $years Years.";
?>

