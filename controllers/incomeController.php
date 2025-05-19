<?php

namespace app\controllers;

use app\model\entities\income;
use app\models\drivers\ConexDB;

class IncomeController
{

    public function addNewIncome($request)
    {
        $value = isset($_POST['value']) ? floatval($_POST['value']) : 0.0;
        $idReport = isset($_POST['idReport']) ? floatval($_POST['idReport']) : 0;
        $income = new Income(0.0, $value, $idReport);
        $conexDB = new ConexDB;
        $income->setConex($conexDB);
        $income->add();

    }

    public function modifyIncomeValue($request)
    {
        $value = isset($_POST['value']) ? floatval($_POST['value']) : 0.0;
        $id = isset($_POST['id']) ? floatval($_POST['id']) : 0;
        $income = new Income($id, $value);
        $conexDB = new ConexDB;
        $income->setConex($conexDB);
        $income->modifyValue();

    }

    


}