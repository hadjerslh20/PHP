<?php 
   $day = "Thu";
   if($day=="Sat" or $day=="Sun" or $day=="Mon"){
      echo "We Are Open All The Day";
   }elseif($day=="Tue" or $day=="Wed") {
      echo "We Are Open From 08:12";
   }elseif($day=="Thu" or $day=="Fri") {
      echo "We Are Closed";
   }else {
      echo "Unknown Day";
   }
?>
