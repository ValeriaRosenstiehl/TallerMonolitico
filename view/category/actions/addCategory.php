<?php
include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\drivers\conexDB.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\controllers\CategoryController.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\entities\Category.php';

use app\controllers\CategoryController;

    $controller = new CategoryController();
    $result = $controller->addNewCategory($_POST);
    //falta validar si el bill ya existe
    ?>
    <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Add Category</title>
        </head>

        <body>
            <h1>Result:</h1>
            <?php
            if ($result !== null) {
                echo '<p>The operation was unsuccesfull</p>';
            } else {
                echo '<p>Category Saved</p>';
            }
            ?>
            <a href="../menu.php">Back</a>
        </body>

        </html>