<?php 
    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST["numOne"]) && isset($_POST["numTwo"])) {
        $numOne= $_POST["numOne"];
        $numTwo= $_POST["numTwo"];
        if($numOne == $numTwo) {
            $verify= true;
        }else{
            $error= "These numbers are not equal !"; 
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
        <label>Number One:</label>
        <input type="number" name="numOne" placeholder="Enter number One"> <br><br>
        <label>Number Two:</label>
        <input type="number" name="numTwo" placeholder="Enter number Two"> <br><br>
        <input type="submit" value="Check">
    </form>
    <?php 
        if(isset($verify)) {?>
        <form method = "GET">
        <label>username:</label>
        <input type="text" name="username" placeholder="Enter your name"> <br><br>
        <input type="submit" value="show">
        </form>
        <?php 
        if($_SERVER['REQUEST_METHOD']=="GET" && isset($_GET["username"])) {
            $username = $_GET["username"];
            echo "Hello $username";
        }
    
}elseif(isset($error)) {
        echo $error;
    } ?>

</body>
</html>

