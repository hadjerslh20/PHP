<?php 
    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST["text"])) {
        $type = $_POST["text"];
        if(str_word_count($type )==5){
            $cor="Correct text";
        }else {
            $inc="Your text should be equal 5 words.";
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
        <label>Text:</label>
        <input type="text" name="text"> <br><br>
        <input type="submit" value="Send">
    </form>
    <?php 
    if(isset($cor)){
        echo $cor;
    }elseif(isset($inc)) {
        echo $inc;
    }
    ?>
</body>
</html>
