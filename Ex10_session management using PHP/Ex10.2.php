<?php
session_start(); // Start the session

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Set session variables
    $_SESSION['username'] = htmlspecialchars($_POST['username']);
}
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="Ex10.2.css">
</head>
<body>

   <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1> <br>
    <p>You are now logged in.</p>
   <button><a href="Ex10.3.php">Logout</a></button>
</body>
</html>
