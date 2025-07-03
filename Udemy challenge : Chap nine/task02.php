
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task02</title>
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
            echo "Table of $a:"."<br>";
            for($i=0;$i<=10;$i++) {
                echo "$a * $i = ".$i*$a;
                echo "<br>";
            }
        }
        tablemul($number);
    }
?>
</body>
</html>
