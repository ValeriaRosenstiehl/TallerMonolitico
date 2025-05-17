<?php

namespace app\controllers;

use app\model\entities\Bills;

class BillsController
{

    public function addNewBill($request)
    {
        $bill = new Bills();
        $bill->set('id',$id);
        $bill->set('category_id', $category_id);
        $bill->set('month', $month);
        $bill->set('year', $year);
        $bill->set('value', $value);
        return $bill->addNewBill(); 

    }

    public function modifyBillValue($request)
    {
        $bill = new Bills();
        $bill->set('id', $id);
        $bill->set('category_id', $category_id);
        $bill->set('month', $month);
        $bill->set('year', $year);
        $bil->set('value', $request['value']);
        return $bill->modifyBillValue();  

    }

    public function deleteBill(){
        $bill= new bill();
        $bill->set('id', $id);
        return $bill->deleteBill($request['id']); 

    }


}