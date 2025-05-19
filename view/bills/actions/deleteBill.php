<?php
include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\drivers\conexDB.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\controllers\BillController.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\entities\Bill.php';

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
    <title>Delete bill</title>
</head>

<body>
    <h1>Result:</h1>
    <?php
    if ($result) {
        echo '<p>Bill Deleted</p>';
    } else {
        echo '<p>The operation was unsuccesfull</p>';
    }
    ?>
    <a href="../menu.php">Back</a>
</body>

</html>