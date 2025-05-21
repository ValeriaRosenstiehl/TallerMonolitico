<?php
include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\drivers\conexDB.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\controllers\CategoryController.php';
include 'C:\xampp\htdocs\55824002\TallerMonolitico\model\entities\Category.php';

?>
 <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/category.css">
    <title>Add Category</title>
</head>

<body>
    
    <form action="actions/addCategory.php" method="post">
        <h1>Add Category</h1>
        <div>
            <label>Name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Percentage:</label>
            <input type="number" name="percentage" required>
        </div>
            <button type="submit">Save</button>
        </div>
        <a href="menu.php">Back</a><br>
    </form>
    
   
</body>

</html>

    