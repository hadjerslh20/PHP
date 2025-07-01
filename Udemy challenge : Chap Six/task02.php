<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>number one:</label>
        <input type="number" name="numOne"> <br><br>
        <label>number two:</label>
        <input type="number" name="numTwo"> <br><br>
        <input type="submit" value="Verify">
    </form>
    <?php 
        if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['numOne']) && isset($_POST['numTwo'])) {
            $numOne=$_POST['numOne'];
            $numTwo=$_POST['numTwo'];
            $result = $numOne + $numTwo;
            echo $numOne." + ".$numTwo." = ".$result;
        }
    ?>
</body>
</html>

