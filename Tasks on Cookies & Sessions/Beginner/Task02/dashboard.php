<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task02|Dashboard</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['username']?></h1>
    <form action="logout.php">
        <br><br>
        <input type="submit" value="Log Out">
    </form>
</body>
</html>
