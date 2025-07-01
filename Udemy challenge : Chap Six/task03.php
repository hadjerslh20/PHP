<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>number one:</label>
        <input type="number" name="numOne"> <br><br>
        <input type="submit" value="Send">
    </form>
    <?php 
        if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['numOne'])) {
            $numOne=$_POST['numOne'];
            if($numOne %2==0) {
                echo "Even";
            }else {
                echo "odd";
            }
        }
    ?>
</body>
</html>

