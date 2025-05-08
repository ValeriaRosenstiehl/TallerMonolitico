<?php

namespace app\controllers;

use app\model\entities\expenses;

class CategoryController
{

    public function addNewcategory($request)
    {
        $category = new category();
        $category->set('id', $id);
        $category->set('name', $name);
        $category->set('percentaje', $percentaje);
        return $category->add();  

    }

    public function modifyCategory($request)
    {
        $category = new category();
        $category->set('id', $id);
        $category->set('name', $name);
        $category->set('percentaje', $percentaje);
        return $category->modify();  

    }

    public function deleteCategory($id){
        $category = new category();
        $category->set('id', $id);
        return $category->delete();        
    }


}