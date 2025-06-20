<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udemy</title>
</head>
<body>
    <form action="" method="POST">
        <label>Number One:</label>
        <input type="number" name="numOne"> <br>
        <label>Number Two:</label>
        <input type="number" name="numTwo"> <br>
        <input type="submit" value="send">
    </form>
    <?php 
    if($_SERVER['REQUEST_METHOD']==='POST') {
        $newNumOne = $_POST['numOne']**2;
        $newNumTwo = $_POST['numTwo']**2;
        echo "The quare of number One is : $newNumOne <br/>";
        echo "The quare of number One is : $newNumTwo <br/>";
        echo "The sum of quared number One and The quared number Two is :".($newNumOne + $newNumTwo);
    }
?>
</body>
</html>
