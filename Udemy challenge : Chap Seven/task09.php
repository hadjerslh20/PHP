<?php 
    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST["password"])) {
        $type = $_POST["password"];
        if(strlen($type) >= 10){
            $cor="Correct Password";
        }else {
            $inc="Your password should be equal orgreater than 10 characters.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task01</title>
</head>
<body>
    <form method = "POST">
        <label>Password:</label>
        <input type="password" name="password"> <br><br>
        <input type="submit" value="Send">
    </form>
    <?php 
    if(isset($cor)){
        echo $cor;
    }elseif(isset($inc)) {
        echo $inc;
    }
    ?>
</body>
</html>
