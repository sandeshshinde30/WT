<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1>CRUD Operations</h1>

   <div style="display:flex; justify-content: center;text-align: center;">
       <div class="container">
            <form action="create.php" method="get">
                <button type="submit">Create</button>
            </form>
            <form action="read.php" method="get">
                <button type="submit">Read</button>
            </form>
            <form action="update.php" method="get">
                <button type="submit">Update</button>
            </form>
            <form action="delete.php" method="get">
                <button type="submit">Delete</button>
            </form>
        </div>
   </div>

</body>
</html>
