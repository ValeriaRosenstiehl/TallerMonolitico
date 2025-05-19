<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/paginas.css">
    <title>Modify Bill</title>
</head>

<body>
    <h1>Modify Bill Value</h1>
    <form action="actions/modifyBill.php" method="post">
        <div>
            <label>Enter the Id of the bill you want to modify:</label>
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
