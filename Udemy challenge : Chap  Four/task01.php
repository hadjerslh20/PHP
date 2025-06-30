<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task02</title>
</head>
<body>
    <form method="POST">
        <label>your text:</label>
        <input type="text" name="text"> <br><br>
        <input type="submit" value="Send">
    </form>
    <?php 
        if($_SERVER['REQUEST_METHOD']=== 'POST') {
            $text = $_POST['text'];
            $textsize= strlen($text);
            echo "your text size is : $textsize";
        }
    ?>
</body>
</html>

