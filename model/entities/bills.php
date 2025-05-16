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
         $sql = "SELECT * FROM expenses";
        $conex = new ConexDB();
        $resultDb = $conex->execSQL($sql);
        $expenses = [];

        if ($resultDb->num_rows > 0) {
            while ($rowDb = $resultDb->fetch_assoc()) {
                $expense = new Expenses();
                $expense->set('id', $rowDb['id']);
                $expense->set('category_id', $rowDb['category_id']);
                $expense->set('month', $rowDb['month']);
                $expense->set('year', $rowDb['year']);
                $expense->set('value', $rowDb['value']);
                $expenses[] = $expense;
            }
        }

        $conex->close();
        return $expenses; 

    }

    public function add()
    {
        $sql = "INSERT INTO expenses (category_id, month, year, value) VALUES (?, ?, ?, ?)";
        $conex = new ConexDB();
        $resultDb = $conex->prepare($sql);
        $resultDb->bind_param("issi", $data['category_id'], $data['month'], $data['year'], $data['value']);
        $resultDb->execute();
        $conex->close();

    }

    public function modifyValue()
    {
         $sql = "UPDATE bills SET category_id = ?, value = ? WHERE id = ?";
        $conex = new ConexDB();
        $resultDb = $conex->prepare($sql);
        $resultDb->bind_param("id", $category_id, $value, $id);
        $resultDb->execute();
        $conex->close();

    }

    public function delete()
    {
        $sql = "DELETE FROM expenses WHERE id = ?";
       $conex = new ConexDB();
        $resultDb = $conex->execSQL($sql);
        $conex->close();
        return $resultDb;

    }
}
