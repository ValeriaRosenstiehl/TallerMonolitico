<?php
include '../../model/drivers/conexDB.php';
include '../../model/entities/reports.php';
include '../../controllers/reportController.php';

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
            if ($result) {
                echo '<p>Report Saved</p>';
            } else {
                echo '<p>The operation was unsuccesfull</p>';
            }
            ?>
            <a href="../menu.php">Back</a>
        </body>

        </html>