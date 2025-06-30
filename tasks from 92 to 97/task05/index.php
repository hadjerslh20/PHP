<?php 
    echo time();
    echo '<br>';
    echo strtotime("now");
    echo '<br>';
    $diff=date_diff(date_create("now"), date_create("1970-01-01"));
    echo ($diff->y)*360*24*60*60 + ($diff->m)*30*24*60*60 + ($diff->d)*24*60*60 + ($diff->h * 60 * 60) + ($diff->i * 60) + ($diff->s);
?>
