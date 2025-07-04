<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task10</title>
</head>
<body>
    <form method="GET">
        <label>your text:</label>
        <input type="text" name="text"><br><br>
        <input type="submit" value="calculate">
    </form>
    <?php 
        if($_SERVER['REQUEST_METHOD']==='GET' && isset($_GET['text'])) {
            $a=$_GET['text'];
            function areaRectangle($a){
                return "Text Upper: ".strtoupper($a);
            }
            echo areaRectangle($a);
        }
    ?>
</body>
</html>
