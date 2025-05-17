<?php

namespace app\controllers;

use app\model\entities\Bills;

class BillsController
{

    public function addNewBill($request)
    {
        $bill = new Bills();
        $bill->set('id',$id);
        $bill->set('idCategory', $idCategory);
        $bill->set('value', $value);
        $bill->set('idReport', $idReport);
        return $bill->addNewBill(); 

    }

    public function modifyBillValue($request)
    {
        $bill = new Bills();
        $bill->set('id', $id);
        $bill->set('idCategory', $idCategory);
        $bil->set('value', $request['value']);
        $bill->set('idReport', $idReport);
        return $bill->modifyBillValue();  

    }

    public function deleteBill(){
        $bill= new bill();
        $bill->set('id', $id);
        return $bill->deleteBill($request['id']); 

    }


}