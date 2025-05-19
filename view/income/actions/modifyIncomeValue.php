<?php
include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\drivers\conexDB.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\controllers\IncomeController.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\entities\Income.php';

use app\controllers\IncomeController;
$controller = new IncomeController();
$result = $controller->modifyIncomeValue($_POST);
//falta validar si existe el bill
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Income</title>
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