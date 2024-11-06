<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Student Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <div>
        <h1>Student Data</h1>

        <?php
     
        $servername = "localhost"; 
        $username = "root";         
        $password_db = "";          
        $dbname = "register";       

        $conn = mysqli_connect($servername, $username, $password_db, $dbname);

      
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        
        $sql = "SELECT id, name, email, gender FROM student";
        $result = mysqli_query($conn, $sql);

        
        if (mysqli_num_rows($result) > 0) {
          
            echo "<table>";
            echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Gender</th></tr>";

           
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["gender"] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>No records found.</p>";
        }

        
        mysqli_close($conn);
        ?>
    </div>

</body>
</html>
