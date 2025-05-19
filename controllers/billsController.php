<?php

namespace app\controllers;

use app\models\entities\Bills;
use app\models\drivers\ConexDB;

class BillsController
{

    public function addNewBill($request)
    {
        $value = isset($_POST['value']) ? floatval($_POST['value']) : 0.0;
        $idCategory = isset($_POST['idCategory']) ? floatval($_POST['idCategory']) : 0;
        $idReport = isset($_POST['idReport']) ? floatval($_POST['idReport']) : 0;
        $bill = new Bills(0.0, $value, $idCategory,$idReport);
        $conexDB = new ConexDB;
        $bill->setConex($conexDB);
        $bill->add();


    }

    public function modifyBillValue($request)
    {
        $value = isset($_POST['value']) ? floatval($_POST['value']) : 0.0;
        $id = isset($_POST['id']) ? floatval($_POST['id']) : 0;
        $bill = new Bills($id, $value);
        $conexDB = new ConexDB;
        $bill->setConex($conexDB);
        $bill->modifyValue();


    }

    public function deleteBill(){
        $id = isset($_POST['id']) ? floatval($_POST['id']) : 0;
        $bill = new Bills($id,0.0);
        $conexDB = new ConexDB;
        $bill->setConex($conexDB);
        $bill->delete($id);
    }


}