<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task07</title>
</head>
<body>
    <form method="GET">
        <label>Number One:</label>
        <input type="number" name="numOne"><br><br>
        <input type="submit" value="Send">
    </form>
    <?php 
if($_SERVER['REQUEST_METHOD']==="GET" && isset($_GET['numOne'])){
    $start = $_GET['numOne'];
    $i=1;
    echo "Numbers of $start are:"."<br>";
    while( $i<=100 ){
        echo $i;
        echo '<br>';
        $i+=$start;
    }
}
?>
</body>
</html>
