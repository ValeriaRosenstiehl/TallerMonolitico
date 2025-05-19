<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Income</title>
</head>

<body>
    <h1>Modify Income Value</h1>
    <form action="actions/modifyIncome.php" method="post">
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
    </form>
    <a href="../menu.php">Back</a>
   
</body>

</html>
