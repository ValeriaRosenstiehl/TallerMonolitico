<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/category.css">
    <title>Modify Income</title>
</head>

<body>
    
    <form action="actions/modifyIncomeValue.php" method="post">
        <h1>Modify Income Value</h1>
        <div>
            <label>Enter the Id of the Income you want to modify:</label>
            <input type="text" name="id" required>
        </div>
        <div>
            <label>Enter the new value:</label>
            <input type="text" name="value" required>
        </div>
        <div>
            <button type="submit">Enter</button>
        </div>
        <a href="menu.php">Back</a>
    </form>
    
   
</body>

</html>
