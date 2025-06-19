<?php 
   $num_one = 23;
   $num_two = 5;
   $op = "/";
   switch($op) {
      case "+" :
         echo $num_one + $num_two;
         break;
      case "-":
         echo $num_one - $num_two;
         break;
      case "*":
         echo $num_one * $num_two;
         break;
      case "/":
         echo "The result is: ",(int) ($num_one / $num_two);
         echo "<br> The rest is: ",$num_one % $num_two;
         break;
      default:
         echo "Unknown Operation";
   }
?>
