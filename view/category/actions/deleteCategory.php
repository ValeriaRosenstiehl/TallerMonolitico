<?php
include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\drivers\conexDB.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\controllers\CategoryController.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\entities\Category.php';

use app\controllers\CategoryController;
use app\model\entities\Category;

$controller = new CategoryController();
$result = $controller->deleteCategory($_POST);
//falta validar si existe el bill
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../../css/add.css">
    <title>Delete Category</title>
</head>

<body>
    <h1>Result:</h1>
    <?php
    if ($result == null) {
        echo '<p>Category Deleted</p>';
    } else {
        echo '<p>The operation was unsuccesfull</p>';
    }
    
    ?>
    
    <a href="../menu.php">Back</a>
</body>

</html>