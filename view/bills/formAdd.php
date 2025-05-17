<?php

?>
 <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Bill</title>
</head>

<body>
    <h1>Add Bill</h1>
    <form action="actions/addBill.php" method="post">
        <div>
            <label>ID:</label>
            <input type="text" name="id" required>
        </div>
        <div>
            <label>Category:</label>
        <select name="idCategory" required>
        <option value="">-- Select category --</option>
        <?php foreach ($category as $cat): ?>
            <option value="<?= $cat['id'] ?>"><?= htmlspecialchars($cat['nombre']) ?></option>
        <?php endforeach; ?>
        </select>

        </div>
        <div>
            <label>Month:</label>
        <select name="mesInput" required>
            <option value="">-- Select month --</option>
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="Jun">Jun</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
        </select>
        </div>
         <div>
            <label>Year:</label>
            <input type="number" name="year" required>
        </div>
         <div>
            <label>Value:</label>
            <input type="number" name="value" required>
        </div>
        <div>
            <button type="submit">Save</button>
        </div>
    </form>
    <a href="../menu.php">Back</a>
   
</body>

</html>

    