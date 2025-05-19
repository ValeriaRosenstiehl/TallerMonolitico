<?php
include '../../model/drivers/conexDB.php';
include '../../model/entities/bills.php';
include '../../controllers/billsController.php';

use app\controllers\BillsController;

$controller = new BillsController();
$result = $controller->modifyBillValue($_POST);
//falta validar si existe el bill
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Bill</title>
</head>

<body>
    <h1>Result:</h1>
    <?php
    if ($result) {
        echo '<p>The new value was updated</p>';
    } else {
        echo '<p>The operation was unsuccesfull</p>';
    }
    ?>
    <a href="../menu.php">Back</a>
</body>

</html>