<?php

include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\drivers\conexDB.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\entities\Category.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\controllers\CategoryController.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\controllers\ReportController.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\entities\Report.php';
use app\controllers\CategoryController;
$categoryController = new CategoryController();
$categories = $categoryController->queryAllCategory();
use app\controllers\ReportController;
$controller = new ReportController();
$reports = $controller->queryAllReport();

?>
 <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/paginas.css">
    <title>Add Bill</title>
</head>
    
<body>
    
    <form action="actions/addBill.php" method="post">
        <h1>Add Bill</h1>
        <div>
            <label>Category:</label>
                <select name="idCategory" required>
                    <option value="">-- Select category --</option>
                    <?php
                    for ($i = 1; $i < count($categories); $i++) {
                        $category = $categories[$i]; // Accedemos al elemento actual
                        if ($category instanceof app\model\entities\Category) {
                            echo '<option value="' . htmlspecialchars($category->getId()) . '">' . htmlspecialchars($category->getName()) . '</option>';
                        }
                    }?>
                </select>
        </div>
        <div>
            <label>Report:</label>
               </select>
        </div>
        <div>
            <label>Report:</label>
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
    

         <div>
            <label>Value:</label>
            <input type="number" name="value" required>
        </div>
        <div>
            <button type="submit">Save</button>
        </div>
         <a href="menu.php">Back</a>
         
        
    
    </form>
   
   
</body>

</html>

    