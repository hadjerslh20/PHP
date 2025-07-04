<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task08</title>
</head>
<body>
    <form method="GET">
        <label>Value of hour:</label>
        <input type="number" name="numOne"><br><br>
        <label>Value of minutes:</label>
        <input type="number" name="numTwo"><br><br>
        <label>Value of seconds:</label>
        <input type="number" name="numThree"><br><br>
        <input type="submit" value="calculate">
    </form>
    <?php 
        if($_SERVER['REQUEST_METHOD']==='GET' && isset($_GET['numOne']) && isset($_GET['numTwo'])&& isset($_GET['numThree'])) {
            $a=$_GET['numOne'];
            $b=$_GET['numTwo'];
            $c=$_GET['numThree'];
            function areaRectangle($a,$b,$c){
                return "Time in seconds is: ".($a*3600+$b*60+$c)." s";
            }
            echo areaRectangle($a,$b,$c);
        }
    ?>
</body>
</html>
