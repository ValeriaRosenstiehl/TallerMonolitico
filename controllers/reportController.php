<?php

namespace app\controllers;

use app\model\entities\report;
use app\models\drivers\ConexDB;

class ReportController
{

    public function addNewReport($request)
    {
        $month = isset($_POST['month']) ? floatval($_POST['month']) : 0.0;
        $year = isset($_POST['year']) ? floatval($_POST['year']) : 0;
        $report = new Report(0.0, $month, $year);
        $conexDB = new ConexDB;
        $report->setConex($conexDB);
        $report->add();

    }
}