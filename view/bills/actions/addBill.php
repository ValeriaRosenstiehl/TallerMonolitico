<?php
include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\drivers\conexDB.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\controllers\BillsController.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\entities\Bills.php';


use app\controllers\BillsController;

   
    $controller = new BillsController();
    $result = $controller->addNewBill($_POST);
    //falta validar si el bill ya existe
    ?>
    <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../../css/add.css">
            <title>Add Bill</title>
        </head>

        <body>
            <h1>Result:</h1>
            <?php
            if ($result == null) {
                echo '<p>Bill Saved</p>';
            } else {
                echo '<p>The operation was unsuccesfull</p>';
            }
            ?>
            <a href="../menu.php">Back</a>
        </body>

        </html>



