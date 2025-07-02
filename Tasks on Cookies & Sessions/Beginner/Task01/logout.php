<?php 
    setcookie("username"," ", strtotime("-2 days"),"/");
    header("Location:index.php");
    exit();
?>
