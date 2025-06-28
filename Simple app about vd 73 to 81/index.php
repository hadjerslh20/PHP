<?php
/*
إليك مثالًا عمليًا بسيطًا على نموذج HTML مع تحقق بالـ PHP باستخدام filter_var() لـ:

📧 التحقق من البريد الإلكتروني

🔢 التحقق من العمر (int)
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple app of videos 73 to 81</title>
</head>
<body>
    <form method="POST">
        <label>Email:</label>
        <input type="text" name="email"> <br>
        <?php 
            if($_SERVER['REQUEST_METHOD']==="POST") {
                if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                    echo '<p style="color: red;">incorrect email</p><br>';
                }
            }
        ?>
        <label>Age:</label>
        <input type="text" name="age"> <br>
        <?php 
            if($_SERVER['REQUEST_METHOD']==="POST") {
                if(!filter_var($_POST['age'],FILTER_VALIDATE_INT,[
    "options" => [
        "min_range" =>12,
        "max_range" => 100
    ]])){
                    echo '<p style="color: red;">incorrect age</p><br>';
                }
            }
        ?>
        <label>Price:</label>
        <input type="text" name="price"> <br><br>
        <input type="submit" value="Verify">
    </form>
</body>
</html>
