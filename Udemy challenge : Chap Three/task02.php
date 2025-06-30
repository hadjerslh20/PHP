<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task02</title>
</head>
<body>
    <form method="POST">
        <label>Number:</label>
        <input type="text" name="num"> <br><br>
        <input type="submit" value="Send">
    </form>
    <?php 
        if($_SERVER['REQUEST_METHOD']=== 'POST') {
            $numCurr=$_POST['num'];
            $numPrev=$numCurr-1;
            $numNext=$numCurr+1;
            echo "The previous number of $numCurr is : $numPrev";
            echo "<br>";
            echo "The previous number of $numCurr is : $numNext";
        }
    ?>
</body>
</html>

