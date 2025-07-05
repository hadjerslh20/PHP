<!--
عدّلي المهمة السابقة (نموذج العمر)، بحيث:

لا تعرضي الخطأ على الشاشة.

بل استخدمي error_log() لتسجليه في ملف باسم errors.log.

👉 هدف المهمة: تعلم التسجيل في ملف خارجي بدل طباعة الخطأ للمستخدم.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task05</title>
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
                error_log("this age is not valid \n",3,"errors.log");
            }else{
                echo "This is valid age";
            }
        }
    ?>
</body>
</html>


