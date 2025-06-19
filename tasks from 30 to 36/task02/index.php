<?php
   // test one
   $a = 100;
   $b = 200;
   $c = 300;
   // test two
   $a = 200;
   $b = 100;
   $c = 300;
   // test three
   $a = 200;
   $b = 200;
   $c = 100;
   
   if($a > $b){
      echo "A is larger than B";
   }elseif ($a > $c) {
      echo "A is larger than C";
   } else {
      echo "A is not larger than B or C";
   }
?>
