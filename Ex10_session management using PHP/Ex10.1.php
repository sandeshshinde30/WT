<?php
session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Ex10.1.css">
</head>
<body>

    <form action="Ex10.2.php" method="post">
        <div class="form">
            <h1>Login</h1>
          
            <label for="name"><Ul></Ul>Username </label> 
            <input type="text" name="username" placeholder="Enter your username" required>
            
            <label for="password">Password</label> 
            <input type="password" name="password" placeholder="Enter your password" required>
            
            
            <button name="submit">Login</button>
        </div>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $gender = htmlspecialchars($_POST['gender']);

        echo "<div class='result'>";
        echo "<h2>Registration Successful!</h2>";
        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "Gender: $gender <br>";
        echo "</div>";
    }
    ?>

</body>
</html>
