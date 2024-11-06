<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Student Data</title>
    <link rel="stylesheet" href="create.css">
    
</head>
<body>
<form method="POST" action="">
<div class="form">
            <h1>Delete Data</h1>

            <label for="email">Enter Email to Update</label> 
            <input type="email" name="email" placeholder="Enter your email" required>
                
            <button name="delete">Delete</button>
        </div>
    </form>

    <?php
    if (isset($_POST['delete'])) {
       
        $servername = "localhost";
        $username = "root";
        $password_db = "";  
        $dbname = "register"; 

        
        $conn = new mysqli($servername, $username, $password_db, $dbname);

        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

       
        $email = htmlspecialchars($_POST['email']);

        
        $sql = "DELETE FROM student WHERE Email='$email'";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='result'>";
            echo "<h2>Record deleted successfully.</h2>";
            echo "</div>";
        } else {
            echo "<div class='result'>";
            echo "<h2>Error deleting record: " . $conn->error . "</h2>";
            echo "</div>";
        }

        
        $conn->close();
    }
    ?>

</body>
</html>
