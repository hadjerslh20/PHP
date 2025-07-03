<?php 
    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST["numOne"])) {
        $numOne= $_POST["numOne"];
        if($numOne%2==0){
            $squared = $numOne **2;
            $cubed = pow($numOne,3);
        }else {
            $notequality="This number is odd not even.";
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
        <input type="submit" value="Check">
    </form>
    <?php 
        if(isset($squared) && isset($cubed) && isset($numOne)){
            echo "The square of $numOne is $squared.".'<br>';
            echo "The square of $numOne is $cubed.";
        }elseif(isset($notequality)){
            echo $notequality;
        }
    ?>
</body>
</html>
