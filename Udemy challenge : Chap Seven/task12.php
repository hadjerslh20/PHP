<?php 
    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST["numOne"]) && isset($_POST["numTwo"])) {
        $numOne = $_POST["numOne"];
        $numTwo = $_POST["numTwo"];
        $result = $numOne + $numTwo;
        if($result >0) {
            $syaHello= "<h1>Welcome</h1>";
        }else {
            $error="<h1>Thier sum is negative</h1>";
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
        <input type="number" name="numOne"> <br><br>
        <label>Number Two:</label>
        <input type="number" name="numTwo"> <br><br>
        <input type="submit" value="Send">
    </form>
    <?php 
    if(isset($syaHello)){
        echo $syaHello;
    }elseif(isset($error)){
        echo $error;
    }
    ?>
</body>
</html>
