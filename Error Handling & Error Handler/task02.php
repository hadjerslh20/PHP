/*
استخدم نموذج <form> لطلب "العمر".

إذا كان العمر أقل من 0 أو أكبر من 120 → استخدم trigger_error() لعرض رسالة خطأ مخصصة.
*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task02</title>
</head>
<body>
    <form method="GET">
        <label>Age:</label>
        <input type="number" name="age"><br><br>
        <input type="submit" value="Check">
    </form>
    <?php 
        if($_SERVER['REQUEST_METHOD']=="GET" && isset($_GET['age'])) {
            $age=$_GET['age'];
            if($age < 0 || $age > 120) {
                trigger_error("This age invalid!",E_USER_WARNING);
            }else {
                echo 'valid age ';
            }
        }
    ?>
</body>
</html>
