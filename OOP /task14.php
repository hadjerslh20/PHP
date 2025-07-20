<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exceptions</title>
</head>
<body>
    <form method="GET">
        <label>Username:</label>
        <input type="text" name="username"> <br><br>
        <label>Password:</label>
        <input type="age" name="age"> <br><br>
        <input type="submit" value="Send">
    </form>
    <?php 
        if($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['username']) && isset($_GET['age']) ) {
            function UserInfoCheck($username , $age) {
                if(empty($username)) {
                    throw new Exception ("You must write your name not be empty");
                }
                if(!is_numeric($age) || $age < 18) {
                    throw new Exception ("Your age must be numeric and greater than 18");
                }
            }
            try {
            $username = $_GET['username'];
            $age= $_GET['age'];
            UserInfoCheck($username , $age);
        } catch (Exception $e){
            echo "Error".$e->getMessage().'<br>';
        } finally {
            echo "Thanks for your trying";
        }
        }
        
    ?>
</body>
</html>
