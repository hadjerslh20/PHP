
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task03</title>
</head>
<body>
    <form method="GET">
        <label>Number:</label>
        <input type=number name="num"><br><br><br>
        <input type="submit" value="send">
    </form>
    <?php 
    if($_SERVER['REQUEST_METHOD']=="GET" && isset($_GET['num'])) {
        $number = $_GET['num'];
        function tablemul($a) {
            echo "Factorial Of $a is :";
            $result=1;
            for($i=$a; $i>0 ; $i--) {
                $result*=$i;
            }
            echo $result;
        }
        tablemul($number);
    }
?>
</body>
</html>
