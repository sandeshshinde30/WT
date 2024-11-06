<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String Operations</title>
    <link rel="stylesheet" href="Ex8.css">
</head>
<body>
    <h1>String Operations in PHP</h1>

    <form action="" method="post">
        <div class="ip">
            <p>Enter a string:</p>
            <input type="text" name="inputString" required>
            <button name="submit">Process</button>
        </div>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $inputString = $_POST['inputString'];

        $length = strlen($inputString);
        $uppercase = strtoupper($inputString);
        $lowercase = strtolower($inputString);
        $trimmed = trim($inputString);
        $replaced = str_replace(" ", "-", $trimmed); 

    
        echo "<div class='result'>";
        echo "<h2>Results:</h2>";
        echo "<b>Original String</b>: $inputString <br>";
        echo "<b>Length</b>: $length <br>";
        echo "<b>Uppercase</b>: $uppercase <br>";
        echo "<b>Lowercase</b>: $lowercase <br>";
        echo "<b>Trimmed: </b>'$trimmed' <br>";
        echo "<b>Replaced (spaces with dashes): </b>'$replaced' <br>";
        echo "</div>";
    }
    ?>

</body>
</html>
