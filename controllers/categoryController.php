<?php

namespace app\controllers;

use app\model\entities\Category;
use app\models\drivers\ConexDB;

class CategoryController
{

    public function queryAllCategory()
    {
        $categories = new Category(0,null, 0.0);
        $data = $categories->show();
        return $data;
    }
    public function addNewcategory($request)
    {
        $name = $request['name'];
        $percentage = isset($request['percentage']) ? floatval($request['percentage']) : 0.0;
        $category = new Category(0, $name, $percentage);
        $conexDB = new ConexDB;
        $category->setConex($conexDB);
        $category->add();

    }

    public function modifyCategory($request)
    {
        $id = isset($request['id']) ? floatval($request['id']) : 0;
        $name = $request['name'];
        $percentage = isset($request['percentage']) ? floatval($request['percentage']) : 0.0;
        $category = new Category($id, $name, $percentage);
        $conexDB = new ConexDB;
        $category->setConex($conexDB);
        $category->modify();
    }

    public function deleteCategory($id){
        $id = isset($request['id']) ? floatval($request['id']) : 0;
        $category = new Category($id,null,0);
        $conexDB = new ConexDB;
        $category->setConex($conexDB);
        $category->delete($id);        
    }


}