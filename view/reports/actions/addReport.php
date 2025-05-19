<?php
include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\drivers\conexDB.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\controllers\ReportController.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\entities\Report.php';

use app\controllers\ReportController;

    $controller = new reportController();
  
    $result = $controller->addNewReport($_POST);
    //falta validar si el bill ya existe
    ?>
    <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Add Report</title>
        </head>

        <body>
            <h1>Result:</h1>
            <?php
            if ($result = null) {
                echo '<p>The operation was unsuccesfull</p>';
            } else {
                echo '<p>Report Saved</p>';
            }
            ?>
            <a href="../../../index.php">Back</a>
        </body>

        </html>