<?php 
    session_start();
    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['username']) && isset($_POST['email'])&& isset($_POST['password'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($email =="hadjersisalah2004@gmail.com" && $password=="123"){
            $_SESSION['username'] = $username;
            header('Location:dashboard.php');
            exit();
        }else {
            $error="User not found !";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task02</title>
</head>
<body>
    <form method="POST">
        <label>Username:</label>
        <input type="text" name="username" placeholder="Enter your username"> <br><br>
        <label>Email:</label>
        <input type="email" name="email" placeholder="Enter your email"> <br><br>
        <label>Password:</label>
        <input type="password" name="password" placeholder="Enter your email"> <br><br>
        <input type="submit" value="Send">
        <?php
            if(isset($error)) {?>
                <p style="color:red;"><?php echo $error; ?></p>
            <?php } ?>
        
    </form>
</body>
</html>
