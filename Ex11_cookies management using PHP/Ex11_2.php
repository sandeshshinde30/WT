<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    setcookie('username', $username, time() + 3600, '/'); // Cookie expires in 1 hour
    header('Location: Ex11_2.php'); // Redirect to the display page
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Cookie</title>
    <link rel="stylesheet" href="Ex11_2.css">
</head>
<body>
    <h1>Display Cookie</h1>
    
    <?php
    // Check if the cookie is set
    if (isset($_COOKIE['username'])) {
        echo "<p>Welcome back, " . htmlspecialchars($_COOKIE['username']) . "!</p>";
    } else {
        echo "<p>No cookie found. Please set a cookie first.</p>";
    }
    ?>

    <a href="Ex11_1.php">Set another cookie</a>
</body>
</html>
