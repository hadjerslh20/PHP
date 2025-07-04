<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task07</title>
</head>
<body>
    <form method="GET">
        <label>Value of a:</label>
        <input type="number" name="numOne"><br><br>
        <label>Value of b:</label>
        <input type="number" name="numTwo"><br><br>
        <input type="submit" value="calculate">
    </form>
    <?php 
        if($_SERVER['REQUEST_METHOD']==='GET' && isset($_GET['numOne']) && isset($_GET['numTwo'])) {
            $a=$_GET['numOne'];
            $b=$_GET['numTwo'];
            function areaRectangle($a,$b){
                return "The area is: ".$a*$b;
            }
            echo areaRectangle($a,$b);
        }
    ?>
</body>
</html>
