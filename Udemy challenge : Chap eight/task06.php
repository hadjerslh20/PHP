<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task06</title>
</head>
<body>
    <form method="GET">
        <label>Number One:</label>
        <input type="number" name="numOne"><br><br>
        <label>Number Two:</label>
        <input type="number" name="numTwo"><br><br>
        <input type="submit" value="Send">
    </form>
    <?php 
if($_SERVER['REQUEST_METHOD']==="GET" && isset($_GET['numOne']) && isset($_GET['numTwo'])){
    $start = $_GET['numOne'];
    $end = $_GET['numTwo'];
    $i=$start;
    echo "Numbers between $start and $end are:"."<br>";
    do{
        echo $i;
        echo '<br>';
        $i++;
    }while( $i<=$end );
}
?>
</body>
</html>
