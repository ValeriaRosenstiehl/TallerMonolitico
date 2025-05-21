<?php
include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\drivers\conexDB.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\controllers\ReportController.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\entities\Report.php';
use app\controllers\ReportController;
$controller = new ReportController();
$reports = $controller->queryAllReport();
?>
 <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/category.css">
    <title>Month Report</title>
</head>

<body>
    
    <form action="showReport.php" method="post">
        
        
        <div>
            <label>Month Report:</label>
            <select name="idReport" required>
                <option value="">-- Select report --</option>
                <?php
                for ($i = 1; $i < count($reports); $i++) {
                    $report = $reports[$i]; // Accedemos al elemento actual
                    if ($report instanceof app\model\entities\Report) {
                        echo '<option value="' . htmlspecialchars($report->getId()) . '">' . htmlspecialchars($report->getMonth()) . "-" . htmlspecialchars($report->getYear()).'</option>';
                    }
                }?>
            </select>
        </div>
            <button type="submit">Show</button>
        </div>
        <a href="../../index.php">Back</a>
    </form>
    
   
</body>

</html>

    