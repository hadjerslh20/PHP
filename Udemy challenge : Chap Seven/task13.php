<?php 
    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST["numOne"]) && isset($_POST["numTwo"])) {
        $numOne = $_POST["numOne"];
        $numTwo = $_POST["numTwo"];
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
        <label>Number of rows:</label>
        <input type="number" name="numOne"> <br><br>
        <label>Number of columns:</label>
        <input type="number" name="numTwo"> <br><br>
        <input type="submit" value="Send">
    </form>
    <?php 
    if(isset($numOne) && isset($numTwo)){?>
        <table border="1">
            <?php 
                for($i=0 ; $i < $numOne;$i++):
                    echo"<tr>";
                    for($j=0 ; $j < $numTwo;$j++):
                        echo "<td>";
                        echo $i.'_'.$j;
                        echo "</td>";
                    endfor;
                    echo"</tr>";
                endfor;
            ?>
        </table>
    <?php } ?>
        
    
</body>
</html>
