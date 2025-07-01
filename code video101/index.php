<?php 
    if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['bg-color'])) {
            setcookie('backgroundColor',$_POST['bg-color'],time()+60*60*24);
    }
    if(isset($_COOKIE['backgroundColor'])) {
        echo "<style>body {background-color:".$_COOKIE['backgroundColor']."}</style>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Cookies</title>
</head>
<body>
    <form method="POST">
        <label>Email:</label>
        <input type="color" name="bg-color"> <br><br>
        <input type="submit" value="Verify">
    </form>
</body>
</html>
