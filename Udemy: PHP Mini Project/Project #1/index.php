<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age calculator</title>
</head>
<body>
    <form method="POST">
        <label>Birth Year:</label>
        <input type="number" name="yearB"> <br><br>
        <input type="submit" value="Calc Age">
    </form>
    <?php 
    if($_SERVER['REQUEST_METHOD']==="POST") {
        $yearB= $_POST['yearB'];
        $age = 2025 - $yearB;
        echo "<br>";
        echo "Your age is : $age years old";
    }
    ?>
</body>
</html>


