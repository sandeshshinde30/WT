<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <link rel="stylesheet" href="create.css">
    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        form {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        input, button {
            margin: 10px 0;
            width: 100%;
            padding: 10px;
        }
    </style> -->
</head>
<body>
<form action="" method="post">
        <div class="form">
            <h1>Upadte Data</h1>

            <label for="email">Enter Email to Update</label> 
            <input type="email" name="email" placeholder="Enter your email" required>

            <label for="name">Name</label> 
            <input type="text" name="name" placeholder="Enter your name" required>
            
           
            
            <label for="password">Password</label> 
            <input type="password" name="password" placeholder="Enter your password" required>
            
            <label>Gender</label> <br>
            <input type="radio" name="gender" value="Male" required>
            <label for="Male">Male</label> 
            <input type="radio" name="gender" value="Female" required>
            <label for="Female">Female</label> <br>
            
            <button name="update">update</button>
        </div>
    </form>

    <?php
    if (isset($_POST['update'])) {
        
        $servername = "localhost";
        $username = "root";
        $password_db = "";  
        $dbname = "register"; 

        
        $conn = new mysqli($servername, $username, $password_db, $dbname);

        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        
        $email = htmlspecialchars($_POST['email']);
        $name = htmlspecialchars($_POST['name']);
        $password = htmlspecialchars($_POST['password']);
        $gender = htmlspecialchars($_POST['gender']);

        
        $sql = "UPDATE student SET name='$name', password='$password', gender='$gender' WHERE email='$email'";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='result'>";
            echo "<h2>Record updated successfully.!</h2>";
            echo "</div>";
        } else {
            echo "<div class='result'>";
            echo "<h2>Error updating record: " . $conn->error . "</h2>";
            echo "</div>";
        }

        
        $conn->close();
    }
    ?>
</body>
</html>
