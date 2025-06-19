<!-- php code -->
<?php
   if($_SERVER['REQUEST_METHOD']=== 'POST') {
      echo "The request methos is ". $_SERVER['REQUEST_METHOD']." and username is ".$_POST['user'];
   }
   $admins = ["Osama", "Ahmed", "Sayed"];
   echo '<br>';
   if(in_array($_POST['user'],$admins)) {
      echo "This username ".$_POST['user']." is Admin.";
   }
?>
<!-- HTML Code-->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>task03</title>
</head>
<body>
   <form action="" method="POST">
      <input type="text" name="user">
      <input type="submit" value="Send">
   </form>
</body>
</html>
