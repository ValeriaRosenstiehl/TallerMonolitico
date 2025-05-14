<?php

namespace app\controllers;

use app\model\entities\expenses;

class ExpensesController
{

    public function addNewExpense($request)
    {
        $expense = new Expenses();
        $expense->set('id',$id);
        $expense->set('category_id', $category_id);
        $expense->set('month', $month);
        $expense->set('year', $year);
        $expense->set('value', $value);
        return $expense->addNewExpense(); 

    }

    public function modifyExpenseValue($request)
    {
        $expense = new Expenses();
        $expense->set('id', $id);
        $expense->set('category_id', $category_id);
        $expense->set('month', $month);
        $expense->set('year', $year);
        $expense->set('value', $value);
        return $expense->modifyExpenseValue();  

    }

    public function deleteExpense(){
        $expense= new expense();
        $expense->set('id', $id);
        return $expense->deleteExpense(); 

    }

//traer la query
}