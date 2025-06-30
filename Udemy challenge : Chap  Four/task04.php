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
        <label>replaced text:</label>
        <input type="text" name="rtext"> <br><br>
        <label>deleted text:</label>
        <input type="text" name="dtext"> <br><br>
        <input type="submit" value="Send">
    </form>
    <?php 
        if($_SERVER['REQUEST_METHOD']=== 'POST'&& isset($_POST['text']) && isset($_POST['rtext']) && isset($_POST['dtext'])) {
            $text = $_POST['text'];
            $substr = $_POST['rtext'];
            $rstr = $_POST['dtext'];
            $textpos= str_replace($rstr,$substr,$text);
            echo "your old text is: $text".'<br>';
            echo "your new text is : $textpos";
        }
    ?>
</body>
</html>

