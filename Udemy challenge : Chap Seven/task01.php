<?php 
    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST["numOne"]) && isset($_POST["numTwo"]) && isset($_POST["numThree"])) {
        $numOne= $_POST["numOne"];
        $numTwo = $_POST["numTwo"];
        $numThree = $_POST["numThree"];
        if($numOne==$numTwo && $numOne== $numThree && $numTwo==$numThree){
            $equaliy="The three numbers are equal.";
        }else {
            $notequality="The three numbers are not equal.";
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
        <label>Number Three:</label>
        <input type="number" name="numThree"> <br><br>
        <input type="submit" value="Check">
    </form>
    <?php 
        if(isset($equaliy)){
            echo $equaliy;
        }elseif(isset($notequality)){
            echo $notequality;
        }
    ?>
</body>
</html>
