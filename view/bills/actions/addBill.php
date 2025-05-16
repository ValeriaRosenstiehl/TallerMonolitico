<?php
include '../../model/drivers/conexDB.php';
include '../../model/entities/transaction.php';
include '../../model/entities/bills.php';
include '../../controllers/billsController.php';

use app\controllers\BillsController;

    if ($result) {
        echo '<p>Datos guardados</p>';
    } else {
        echo '<p>No se pudo guardar los datos</p>';

    }

    $controller = new BillsController();
    $result = $controller->addNewBill($_POST);
    //falta validar si el bill ya existe



