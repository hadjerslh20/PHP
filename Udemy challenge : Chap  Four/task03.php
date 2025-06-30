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
        <label>your sub Text:</label>
        <input type="text" name="subtext"> <br><br>
        <input type="submit" value="Send">
    </form>
    <?php 
        if($_SERVER['REQUEST_METHOD']=== 'POST'&& isset($_POST['text']) && isset($_POST['subtext'])) {
            $text = $_POST['text'];
            $substr = $_POST['subtext'];
            $textpos= strpos($text,$substr);
            echo "your text position is : $textpos";
        }
    ?>
</body>
</html>
