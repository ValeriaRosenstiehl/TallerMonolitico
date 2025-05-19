<?php
include '../../model/drivers/conexDB.php';
include '../../model/entities/bills.php';
include '../../controllers/billsController.php';

?>
 <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/paginas.css">
    <title>Add Bill</title>
</head>

<body>
    <h1>Add Bill</h1>
    <form action="actions/addBill.php" method="post">
        
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
            <label>Report:</label>
                <select name="idReport" required>
                <option value="">-- Select report --</option>
                <?php foreach ($report as $rep): ?>
                    <option value="<?= $rep['id'] ?>"><?= htmlspecialchars($rep['nombre']) ?></option>
                <?php endforeach; ?>
                </select>
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

    