<?php

namespace app\controllers;

use app\model\entities\income;
use app\models\drivers\ConexDB;

class IncomeController
{
    public function queryAllIncome()
    {
        $income = new Income(0,0.0,0);
         $conexDB = new ConexDB;
        $income->setConex($conexDB);
        $data = $income->show();
        return $data;
    }

    public function addNewIncome($request)
    {
        
        $value = isset($request['value']) ? floatval($request['value']) : 0.0;
        $idReport = isset($request['idReport']) ? floatval($request['idReport']) : 0;
        $income = new Income(0.0, $value, $idReport);
        $conexDB = new ConexDB;
        $income->setConex($conexDB);
        $income->add();
        

    }

    public function modifyIncomeValue($request)
    {
        $value = isset($request['value']) ? floatval($request['value']) : 0.0;
        $id = isset($request['id']) ? floatval($request['id']) : 0;
        $income = new Income($id, $value);
        $conexDB = new ConexDB;
        $income->setConex($conexDB);
        $income->modifyValue();

    }

    


}