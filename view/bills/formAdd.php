<?php
include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\drivers\conexDB.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\controllers\BillController.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\entities\Bill.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\controllers\CategoryController.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\entities\Category.php';

use app\controllers\CategoryController;
$controller = new CategoryController();
$category = $controller->queryAllCategory();
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
    
    <form action="actions/addBill.php" method="post">
        <h1>Add Bill</h1>
        <div>
            <label>Category:</label>
                <select name="idCategory" required>
                <option value="">-- Select category --</option>
                <?php foreach ($category as $cat): ?>
                    <option value="<?= $cat['id'] ?>"><?= htmlspecialchars($cat['name']) ?></option>
                <?php endforeach; ?>
                </select>
        </div>
        <div>
            <label>Report:</label>
                <select name="idReport" required>
                <option value="">-- Select report --</option>
                <?php foreach ($report as $rep): ?>
                    <option value="<?= $rep['id'] ?>"><?= htmlspecialchars($rep['id']) ?></option>
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
         <a href="menu.php">Back</a>
         <a href="../../inicio/index.php">Home</a>
        
    
    </form>
   
   
</body>

</html>

    