<?php

namespace app\controllers;

use app\model\entities\income;

class IncomeController
{

    public function addNewIncome($request)
    {
        $income = new Income();
        $income->set('id', $id);
        $income->set('month', $month);
        $income->set('year', $year);
        $income->set('value', $value);
        return $income->addNewIncome(); 

    }

    public function modifyIncomeValue($request)
    {
        $income = new Income();
        $income->set('id', $id);
        $income->set('month', $month);
        $income->set('year', $year);
        $income->set('value', $value);
        return $income->modifyIncomeValue(); 

    }

    


}