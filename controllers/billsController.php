<?php

namespace app\controllers;

use app\model\entities\Bills;

class BillsController
{

    public function addNewExpense($request)
    {
        $bill = new Bills();
        $bill->set('id',$id);
        $bill->set('category_id', $category_id);
        $bill->set('month', $month);
        $bill->set('year', $year);
        $bill->set('value', $value);
        return $expense->addNewExpense(); 

    }

    public function modifyBillValue($request)
    {
        $bill = new Bills();
        $bill->set('id', $id);
        $bill->set('category_id', $category_id);
        $bill->set('month', $month);
        $bill->set('year', $year);
        $bil->set('value', $value);
        return $bill->modifyBillValue();  

    }

    public function deleteBill(){
        $bill= new bill();
        $bill->set('id', $id);
        return $bill->deleteBill(); 

    }


}