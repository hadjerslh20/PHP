<!--
اكتبي نموذج (form) يطلب من المستخدم إدخال عمره، ثم:

إذا كان العمر أقل من 0 أو أكثر من 120 → استخدمي trigger_error() لإظهار خطأ من النوع E_USER_WARNING.

👉 هدف المهمة: استخدام trigger_error() للتحقق من منطق البيانات.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task04</title>
</head>
<body>
    <form method="GET">
        <label>Age:</label>
        <input type="number" name="age"> <br><br>
        <input type="submit" value="Send">
    </form>
    <?php 
        if($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['age'])) {
            $age=$_GET['age'];
            if($age <0 || $age > 120 ) {
                trigger_error("This age is not valid.",E_USER_WARNING);
            }else{
                echo "This is valid age";
            }
        }
    ?>
</body>
</html>


