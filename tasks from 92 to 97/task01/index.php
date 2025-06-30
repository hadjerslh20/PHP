<?php 
    date_default_timezone_set("Asia/Riyadh");
    echo date_default_timezone_get();
    echo "<br>";
    echo date_format(date_create(),"D, d M y - H:i:s A");
    echo "<br>";
    echo date_format(date_create(),"l, d F Y - H:i:s A");
?>

