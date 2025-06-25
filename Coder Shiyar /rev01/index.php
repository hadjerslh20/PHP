<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cha1</title>
</head>
<body>
    <form method="POST">
        <label>Price:</label>
        <input type="number" name="price">
        <label>Discount %:</label>
        <input type="number" name="discount">
        <input type="submit" value="Show New price">
    </form>
    <?php 
        if($_SERVER['REQUEST_METHOD']==="POST") {
            $newP = $_POST['price'] - $_POST['price']*($_POST['discount']/100);
            echo "Your new price is $newP $";
        }
    ?>
</body>
</html>
