<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="Ex9.css">
</head>
<body>

    <form action="" method="post">
        <div class="form">
            <h1>Registration</h1>
            <label for="name">Name</label> 
            <input type="text" name="name" placeholder="Enter your name" required>
            
            <label for="email">Email</label> 
            <input type="email" name="email" placeholder="Enter your email" required>
            
            <label for="password">Password</label> 
            <input type="password" name="password" placeholder="Enter your password" required>
            
            <label>Gender</label> <br>
            <input type="radio" name="gender" value="Male" required>
            <label for="Male">Male</label> 
            <input type="radio" name="gender" value="Female" required>
            <label for="Female">Female</label> <br>
            
            <button name="submit">Register</button>
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
