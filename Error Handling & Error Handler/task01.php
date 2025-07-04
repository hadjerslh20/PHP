/*
المهمة 1 – تفعيل عرض الأخطاء:
اكتب ملفًا اسمه test1.php يحتوي على:

تفعيل عرض كل الأخطاء.

كود فيه خطأ بسيط (مثل قسمة على صفر أو متغير غير معرف).

المطلوب:

استخدم error_reporting(E_ALL) و ini_set(...).
*/
<?php 
    error_reporting(E_ALL); // to show all errors
    ini_set('display_errors','1'); // to display all error on browser
    echo 5/0;
?>
