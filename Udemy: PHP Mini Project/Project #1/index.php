/*
    1. PHP Age Calculator
Project Description: The PHP Age Calculator allows a user to input their birth year, and the program will calculate their current age based on the current year. 
It provides a simple way to calculate age dynamically using PHP's built-in date and time functions.
*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age calculator</title>
</head>
<body>
    <form method="POST">
        <label>Birth Year:</label>
        <input type="number" name="yearB"> <br><br>
        <input type="submit" value="Calc Age">
    </form>
    <?php 
    if($_SERVER['REQUEST_METHOD']==="POST") {
        $yearB= $_POST['yearB'];
        $current_year = date("Y");
        $age = $current_year - $yearB;
        echo "<br>";
        echo "Your age is : $age years old";
    }
    ?>
</body>
</html>





