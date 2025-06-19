<?php
   $a = 100;
   $b = 200;
   $c = 100;
   // method one
   if($b > $a and $a === $c and ($a+$c)=== $b) {
      echo 'yes';
   }
   echo '<br>';
   // method two
   if ($b > $a and $a === $c and ($a+$c)) echo 'yes';
?>
