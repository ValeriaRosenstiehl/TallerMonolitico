<?php

namespace app\model\entities;

use app\model\drivers\ConexDB;

class Expenses extends Transaction
{
    public function savings()
    {


    }

    public function all()
    {
        $sql = "select * from expenses";
        $conex = new ConexDB();
        $resultDb = $conex->execSQL($sql);
        $expenses = [];
        if ($resultDb->num_rows > 0) {
            while ($rowDb = $resultDb->fetch_assoc()) {
                $expenses = new category();
                $expenses->set('id', $rowDb['id']);
                $expenses->set('name', $rowDb['nombre']);
                $expenses->set('percentaje', $rowDb['percentaje']);
                array_push($expens, $expenses);
            }
        }
        $conex->close();
        return $expenses;

    }

    public function add()
    {


    }

    public function modifyValue()
    {


    }

    public function delete()
    {


    }
}
