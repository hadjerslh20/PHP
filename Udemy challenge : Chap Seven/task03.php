<?php 
    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST["numOne"]) && isset($_POST["numTwo"]) && isset($_POST["op"])) {
        $numOne= $_POST["numOne"];
        $numTwo= $_POST["numTwo"];
        $operator = $_POST["op"];
        switch($operator) {
            case "+":
                $addition =$numOne + $numTwo;
                break;
            case "-":
                $substraction =$numOne - $numTwo;
                break;
            case "*":
                $multi =$numOne * $numTwo;
                break;
            case "/":
                $div =$numOne / $numTwo;
                break;
            case "%":
                $mod =$numOne % $numTwo;
                break;
            default:
                $error="Operator not Found !";
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
        <label>Operator:</label>
        <input type="text" name="op" placeholder="Enter + or - or * or / or %"> <br><br>
        <input type="submit" value="Show Result">
    </form>
    <?php 
        if(isset($addition) && isset($numOne) && isset($numTwo)){
            echo "$numOne + $numTwo = $addition".'<br>';
        }elseif(isset($substraction) && isset($numOne) && isset($numTwo)){
            echo "$numOne - $numTwo = $substraction".'<br>';
        }elseif(isset($multi) && isset($numOne) && isset($numTwo)) {
            echo "$numOne * $numTwo = $multi".'<br>';
        }elseif(isset($div) && isset($numOne) && isset($numTwo)) {
            echo "$numOne / $numTwo = $div".'<br>';
        }elseif (isset($mod) && isset($numOne) && isset($numTwo)) {
            echo "$numOne % $numTwo = $mod".'<br>';
        }elseif(isset($error)){
            echo $error;
        }
    ?>
</body>
</html>
