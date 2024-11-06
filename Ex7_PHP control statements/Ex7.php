<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP control statements</title>
    <link rel="stylesheet" href="Ex7.css">
</head>
<body>
    <h1>PHP control statement</h1>

    <h2>Check the Day of the Week</h2>

   <form action="" method="post">
   <div >
   <p>Enter Day(1-7) : </p>
   <input type="text" name="day">
   <button name="btn">Enter</button>
   </div>
   </form>

    <?php
        if(isset($_POST['btn'])){
            $day = $_POST['day']; // Change this value to test different days

            switch ($day) {
                case 1:
                    $dayName = "Monday";
                    break;
                case 2:
                    $dayName = "Tuesday";
                    break;
                case 3:
                    $dayName = "Wednesday";
                    break;
                case 4:
                    $dayName = "Thursday";
                    break;
                case 5:
                    $dayName = "Friday";
                    break;
                case 6:
                    $dayName = "Saturday";
                    break;
                case 7:
                    $dayName = "Sunday";
                    break;
                default:
                    $dayName = "Not a valid day.";
                    $errorClass = "error"; // Add error class for styling
            }
            echo "<div style='color: rgb(191, 131, 247); font-size: 24px; font-weight: bold;'>$dayName</div>";
        }
    ?>

</body>
</html>