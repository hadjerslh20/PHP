<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task02</title>
</head>
<body>
    <form method="POST">
        <label>First text:</label>
        <input type="text" name="textOne"> <br><br>
        <label>Second text:</label>
        <input type="text" name="textTwo"> <br><br>
        <input type="submit" value="Send">
    </form>
    <?php 
        if($_SERVER['REQUEST_METHOD']=== 'POST'&& isset($_POST['textOne']) && isset($_POST['textTwo'])) {
            $textOne = $_POST['textOne'];
            $textTwo = $_POST['textTwo'];
            $conText= $textOne." ".$textTwo;
            echo "your full text is : $conText";
        }
    ?>
</body>
</html>

