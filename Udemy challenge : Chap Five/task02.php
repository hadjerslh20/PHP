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
            $degangle=deg2rad($angle);
            echo "The angle $angle deg in radian is : $degangle";
        }
    ?>
</body>
</html>
