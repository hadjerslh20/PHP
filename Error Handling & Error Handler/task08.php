<!--
نشئي نموذج HTML فيه حقلين:

username

age

عند إرسال النموذج:

إذا كان الاسم أقل من 3 حروف → استخدمي trigger_error() (نوع E_USER_NOTICE)

إذا كان العمر أقل من 10 أو أكثر من 80 → استخدمي trigger_error() (نوع E_USER_WARNING)

إذا كان كلاهما غير صالح → استخدمي trigger_error() (نوع E_USER_ERROR)

استخدمي custom error handler لعرض كل خطأ بلون مختلف.

سجلي الأخطاء في ملف log باسم form_errors.log

ي المعالج (myHandler):

اعرض الخطأ في الصفحة.

سجله أيضًا باستخدام error_log("msg", 3, "form_errors.log");

-->
<?php 
        if($_SERVER['REQUEST_METHOD']== 'GET' && isset($_GET['username']) && isset($_GET['age'])) {
            $username= $_GET['username'];
            $age = $_GET['age'];
        }
        function errorhandler($erNum,$erStr,$erFile,$erLine) {
            if($erNum== E_USER_ERROR) {
            echo "<p style='color:red ; font-weight:bold;'>$erNum:$erStr in $erFile file in line $erLine</p>"."<br>";
        }elseif($erNum== E_USER_WARNING) {
            echo "<p style='color:orange ; font-weight:bold;'>$erNum:$erStr in $erFile file in line $erLine</p>"."<br>";
        }elseif($erNum== E_USER_NOTICE) {
            echo "<p style='color:blue ; font-weight:bold;'>$erNum:$erStr in $erFile file in line $erLine</p>"."<br>";
        }else {
            echo "<p style='color:grey ; font-weight:bold;'>$erNum:$erStr in $erFile file in line $erLine</p>"."<br>";
        }
        }
        set_error_handler("errorhandler");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task08</title>
</head>
<body>
    <form method="GET">
        <label>Username:</label>
        <input type="text" name="username"> <br><br>
        <?php 
            if(isset($username)) {
                if(strlen($username)<3){
                trigger_error("Not Valid Name",E_USER_NOTICE);
                error_log('Not Valid Name',3,"form_errors.log");
            }else{
                echo "valid name !"."<br>";
            }
            }
        ?>
        <label>Age:</label>
        <input type="number" name="age"> <br><br>
        <?php 
            if(isset($age)) {
                if($age<10 ||$age>80){
                trigger_error("Not Valid Age",E_USER_WARNING);
                error_log('Not Valid age',3,"form_errors.log");
            }else{
                echo "valid age !"."<br>";
            }
            }
        ?>
        <input type="submit" value="Send">
    </form>
    <?php 
        if(isset($age) && isset($username)) {
            if(($age < 10 || $age > 80) && strlen($username) < 3) {
                trigger_error("Not Valid Name and Age",E_USER_ERROR);
                error_log('Not Valid Name and Age',3,"form_errors.log");
            }
        }
    ?>
</body>
</html>

