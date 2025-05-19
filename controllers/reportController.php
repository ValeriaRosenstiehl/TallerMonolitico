<?php

namespace app\controllers;

use app\model\entities\report;
use app\models\drivers\ConexDB;

class ReportController
{
    public function queryAllReport()
    {
        $reports = new Report(0,null, 0.0);
        $data = $reports->show();
        return $data;
    }

    public function addNewReport($request)
    {
        $month = $request['month']; //aqui quite algo
        $year = isset($request['year']) ? floatval($request['year']) : 0;
        $report = new Report(0, $month, $year);
        $conexDB = new ConexDB;
        $report->setConex($conexDB);
        $report->add();

    }
}