<?php
include '../../model/drivers/conexDB.php';
include '../../model/entities/bills.php';
include '../../controllers/billsController.php';

?>
 <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Report</title>
</head>

<body>
    <h1>Add Report</h1>
    <form action="actions/addReport.php" method="post">
        
            <div>
            <label>Month:</label>
        <select name="month" required>
            <option value="">-- Select month --</option>
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="Jun">Jun</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
        </select>
        </div>
       
        <div>
            <label>Year:</label>
            <input type="number" name="year" required>
        </div>
        
        </div>
            <button type="submit">Save</button>
        </div>
    </form>
    <a href="../../index.php">Back</a>
   
</body>

</html>

    