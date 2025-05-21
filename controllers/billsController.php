<?php

namespace app\controllers;

use app\model\entities\Category;
use app\models\entities\Bills;
use app\models\entities\BillReport;
use app\models\drivers\ConexDB;

class BillsController
{
    public function queryAllBills()
    {
        $bills = new Bills(0, 0.0);
        $conexDB = new ConexDB;
        $bills->setConex($conexDB);
        $data = $bills->show();
        return $data;
    }

    public function addNewBill($request)
    {
        //cambia a request
        $value = isset($request['value']) ? floatval($request['value']) : 0.0;
        $idCategory = isset($request['idCategory']) ? floatval($request['idCategory']) : 0;
        $idReport = isset($request['idReport']) ? floatval($request['idReport']) : 0;
        $bill = new Bills(0.0, $value, $idCategory,$idReport);
        $conexDB = new ConexDB;
        $bill->setConex($conexDB);
        $bill->add();


    }

    public function modifyBillValue($request)
    {
        $value = isset($request['value']) ? floatval($request['value']) : 0.0;
        $id = isset($request['id']) ? floatval($request['id']) : 0;
        $bill = new Bills($id, $value);
        $conexDB = new ConexDB;
        $bill->setConex($conexDB);
        $bill->modifyValue();


    }

    public function deleteBill($request){
        $id = isset($request['id']) ? floatval($request['id']) : 0;
        $bill = new Bills($id,0.0);
        $conexDB = new ConexDB;
        $bill->setConex($conexDB);
        $bill->delete($id);
    }

    public function getBillsByReport($request){
        $id = isset($request['idReport']) ? floatval($request['idReport']) : 0;
        $bills = new Bills(0, 0.0);
        $conexDB = new ConexDB;
        $bills->setConex($conexDB);
        $data = $bills->getBillsByReport($id);
        return $data;
    }

}