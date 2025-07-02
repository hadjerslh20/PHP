<?php 
    if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['username'])) {
        $username=$_POST['username'];
        setcookie("username",$username,strtotime("+1 day"),"/");
        header("Location:".$_SERVER['PHP_SELF']);
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task01</title>
</head>
<body>
    <?php 
        if(isset($_COOKIE['username'])){
            echo "Hello ".$_COOKIE['username']." Welcome!";
        ?>
        <form method="POST" action="logout.php">
            <input type="submit" value="Log Out">
        </form>
    <?php }else { ?>
    <form method="POST">
        <label>Username:</label>
        <input type="text" name="username" placeholder="Enter your username"> <br><br>
        <input type="submit" value="Send">
    </form>
    <?php }?>
</body>
</html>
