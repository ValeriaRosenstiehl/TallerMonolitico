<?php
include '../../model/drivers/conexDB.php';
include '../../model/entities/transaction.php';
include '../../model/entities/expenses.php';
include '../../controllers/expensesController.php';

use app\controllers\BillsController;

$controller = new BillsController();
$result = $controller->deleteBill($_GET['id']);
//falta validar si existe el bill
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Resultado de la opreación</h1>
    <?php
    if ($result) {
        echo '<p>Datos eliminados</p>';
    } else {
        echo '<p>No se pudo borrar los datos</p>';
    }
    ?>
    <a href="../persons.php">Volver</a>
</body>

</html>