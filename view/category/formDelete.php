<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Category</title>
</head>

<body>
    <h1>Delete Category</h1>
    <form action="actions/deleteCategory.php" method="post">
        <div>
            <label>Enter the Id of the category you want to delete:</label>
            <input type="text" name="id" required>
        </div>
        
        <div>
            <button type="submit">Save</button>
        </div>
    </form>
    <a href="../menu.php">Back</a>
   
</body>

</html>
