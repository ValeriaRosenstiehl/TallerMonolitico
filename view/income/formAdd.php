<?php
include '../../model/drivers/conexDB.php';
include '../../model/entities/income.php';
include '../../controllers/incomeController.php';

?>
 <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/category.css">
    <title>Add Income</title>
</head>

<body>
    
    <form action="actions/addIncome.php" method="post">
        <h1>Add Income</h1>
        <div>
            <label>Value:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Report:</label>
                <select name="idReport" required>
                <option value="">-- Select report --</option>
                <?php foreach ($report as $rep): ?>
                    <option value="<?= $rep['id'] ?>"><?= htmlspecialchars($rep['nombre']) ?></option>
                <?php endforeach; ?>
                </select>
        </div>
            <button type="submit">Save</button>
        </div>
        <a href="menu.php">Back</a>
    </form>
    
   
</body>

</html>

    