<?php
include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\drivers\conexDB.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\controllers\BillsController.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\entities\Bills.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\entities\BillReport.php';
use app\controllers\BillsController;
use app\model\entities\BillReport;


$controller = new BillsController();
$result = $controller->getBillsByReport($_POST);


?>
 <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/report.css">
    <title>Month Report</title>
</head>

<body>
    
        <h1>Month Report: </h1>
        <table>
        <thead>
            <tr>
                <th>Income</th>
                <th>Category</th>
                <th>Percentage</th>
                <th>Bill</th>
                <th>Total Spent</th>
                <th>Warnings</th>
                <th>Savings</th>
                
            </tr>
        </thead>
        <tbody>
           <?php

                for ($i = 0; $i < count($result); $i++) {
                    $billReport = $result[$i];
                    
                    echo '<tr>';
                    echo '  <td>' . $billReport->getIncomeValue() . '</td>';
                    echo '  <td>' . $billReport->getCategoryName() . '</td>';
                    echo '  <td>' . $billReport->getCategoryPercentage() . "%".'</td>';
                    echo '  <td>' . $billReport->getValue() . '</td>';
                    echo '  <td>' . $billReport->getPorcentajeEx() . "%".'</td>';
                    echo '  <td>' . $billReport->getResult() . '</td>';
                    echo '  <td>' . $billReport->getAhorro() . "%".'</td>';
                    echo '</tr>';
                    
                }
            ?>
        </tbody>
    </table>
           
        <a href="formReport.php">Back</a>

    
   
</body>

</html>

    