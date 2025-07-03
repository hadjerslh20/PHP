<?php 
    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST["typeIn"])) {
        $type = $_POST["typeIn"];
        switch($type) {
            case 'text':
                $textIn='text';
                break;
            case 'number':
                $numIn='number';
                break;
            case 'submit':
                $subIn='submit';
                break;
            default:
                $error ="This input type not found";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task01</title>
</head>
<body>
    <form method = "POST">
        <label>Input Type:</label>
        <input type="text" name="typeIn" placeholder="Enter your input type"> <br><br>
        <input type="submit" value="Create">
    </form>
    <?php 
    if(isset($textIn)) { echo "<br> <br>"?>
        <input type="text"  placeholder="Enter your text">
    <?php } ?>
    <?php 
    if(isset($numIn)) { echo "<br> <br>"?>
        <input type="number"  placeholder="Enter your number">
    <?php } ?>
    <?php 
    if(isset($subIn)) { echo "<br> <br>"?>
        <input type="submit"  value="Submit">
    <?php } ?>
    <?php 
    if(isset($error)) { echo $error;}?>
</body>
</html>
