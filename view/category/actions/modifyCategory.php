<?php
include '../../model/drivers/conexDB.php';
include '../../model/entities/transaction.php';
include '../../model/entities/category.php';
include '../../controllers/categoryController.php';

use app\controllers\CategoryController;
use app\model\entities\Category;

$controller = new CategoryController();
$result = $controller->modifyCategory($_POST);
//falta validar si existe el bill
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Category</title>
</head>

<body>
    <h1>Result:</h1>
    <?php
    if ($result) {
        echo '<p>Category was updated</p>';
    } else {
        echo '<p>The operation was unsuccesfull</p>';
    }
    ?>
    <a href="../menu.php">Back</a>
</body>

</html>