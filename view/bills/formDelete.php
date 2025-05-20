<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/deletebills.css">
    <title>Delete Bill</title>
</head>

<body>
    <h1>Delete Bill</h1>
    <form action="actions/deleteBill.php" method="post">
        <div>
            <label>Enter the Id of the bill you want to delete:</label>
            <input type="text" name="id" required>
        </div>
        
        <div>
            <button type="submit">Delete</button>
        </div>
    </form>
    <a href="menu.php">Back</a>
   
</body>

</html>
