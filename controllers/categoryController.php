<?php

namespace app\controllers;

use app\model\entities\Category;
use app\models\drivers\ConexDB;

class CategoryController
{

    public function addNewcategory($request)
    {
        $name = isset($_POST['name']) ? floatval($_POST['name']) : 0.0;
        $percentage = isset($_POST['percentage']) ? floatval($_POST['percentage']) : 0;
        $category = new Category(0.0, $name, $percentage);
        $conexDB = new ConexDB;
        $category->setConex($conexDB);
        $category->add();

    }

    public function modifyCategory($request)
    {
        $id = isset($_POST['id']) ? floatval($_POST['id']) : 0;
        $name = isset($_POST['name']) ? floatval($_POST['name']) : 0.0;
        $percentage = isset($_POST['percentage']) ? floatval($_POST['percentage']) : 0.0;
        $category = new Category($id, $name, $percentage);
        $conexDB = new ConexDB;
        $category->setConex($conexDB);
        $category->modify();
    }

    public function deleteCategory($id){
        $id = isset($_POST['id']) ? floatval($_POST['id']) : 0;
        $category = new Category($id,null,0);
        $conexDB = new ConexDB;
        $category->setConex($conexDB);
        $category->delete($id);        
    }


}