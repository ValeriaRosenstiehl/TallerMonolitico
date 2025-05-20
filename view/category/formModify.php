<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/paginas.css">
    <title>Modify Category</title>
</head>

<body>
    
    <form action="actions/modifyCategory.php" method="post">
        <h1>Modify Category</h1>
        <div>
            <label>Enter the Id of the Category you want to modify:</label>
            <input type="text" name="id" required>
        </div>
        <div>
            <label>Enter the new name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Enter the new percentage:</label>
            <input type="text" name="percentage" required>
        </div>
        <div>
            <button type="submit">Enter</button>
        </div>
        <a href="menu.php">Back</a>
    </form>
    
   
</body>

</html>
