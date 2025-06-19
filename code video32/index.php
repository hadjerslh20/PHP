<?php
   /*if ($_SERVER['REQUEST_METHOD']==='POST') {
      echo $_POST['username'];
      echo '<br>';
      echo $_POST['lang'];
   }*/
   if ($_SERVER['REQUEST_METHOD']=== 'POST') {
      if ($_POST['lang']=== 'ar') {
         header('Location:arabic.php');
         exit();
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Elzero</title>
</head>
<body>
      <form action="" method="POST">
      <input type="text" name="username" placeholder="Enter your username">
      <select name="lang">
         <option value="en">English</option>
         <option value="fr">Frensh</option>
         <option value="ar">Arabic</option>
      </select>
      <input type="submit" value="Go">
      </form>
</body>
</html>
