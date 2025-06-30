<?php 
    date_default_timezone_set("Africa/Cairo");
    echo date_default_timezone_get();
    echo "<br>";
    $date = "2005-10-02";
    $new_date =date_add(date_create($date) ,date_interval_create_from_date_string("15 hours 15 minutes 15 seconds"));
    echo date_format($new_date,"Y, F, l \'d")."nd'".date_format($new_date," H:i:s");
?>

