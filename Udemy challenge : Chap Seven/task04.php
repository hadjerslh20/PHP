<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task04</title>
</head>
<body>
    <form method="POST">
        <label>Number 1:</label>
        <input type="number" name="numOne"> <br><br>
        <label>Number 2:</label>
        <input type="number" name="numTwo"> <br><br>
        <input type="submit" value="Check">
    </form>
    <?php 
        if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST["numOne"])&& isset($_POST["numTwo"])) {
            $num1=$_POST["numOne"];
            $num2=$_POST["numTwo"];
            if($num1 == $num2) { ?>
                <form method="GET">
                <label>Name:</label>
                <input type="text" name="username" placeholder="Enter your name"> <br><br>
                <input type="submit" value="send" name="send">
                </form>
            <?php 
            if(isset($_GET['send'])){
                $name=$_GET['username'];
                echo "Hello ".$name; }
            }else {
                echo "Your numbers are not equal";
            }
        }
    ?>
</body>
</html>
