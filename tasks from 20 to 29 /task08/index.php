<?php
// Code 1
$a = @$b or die('variable not found');
echo '<br>';
// Code 2
$f = @file("Not_A_File") or die('file not found');
echo '<br>';
// Code 3
@include("Not_A_File")or die('page not founf');
?>
