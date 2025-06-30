<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angle </title>
</head>
<body>
    <form method="POST">
        <label>Angle in Degree:</label>
        <input type="text" name="ang"> <br><br>
        <input type="submit" value="calc">
    </form>
    <?php 
        if($_SERVER['REQUEST_METHOD']==="POST" && isset($_POST["ang"])) {
            $angle = $_POST["ang"];
            $sinang = sin(deg2rad($_POST["ang"]));
            $tanang = tan(deg2rad($_POST["ang"]));
            $cosng = cos(deg2rad($_POST["ang"]));
            echo "The sin of $angle is : $sinang ".'<br>';
            echo "The tan of $angle is : $tanang ".'<br>';
            echo "The cos of $angle is : $cosng ";
        }
    ?>
</body>
</html>

