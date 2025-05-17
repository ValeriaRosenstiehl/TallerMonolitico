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
         $sql = "SELECT * FROM bills";
        $conex = new ConexDB();
        $resultDb = $conex->execSQL($sql);
        $bills = [];

        if ($resultDb->num_rows > 0) {
            while ($rowDb = $resultDb->fetch_assoc()) {
                $bills = new bills();
                $bills->set('id', $rowDb['id']);
                $bills->set('value', $rowDb['value']);
                $bills->set('idCategory', $rowDb['idCategory']);
                $bills->set('idReport', $rowDb['idReport']);
                $bills[] = $bills;
            }
        }

        $conex->close();
        return $bills; 

    }

    public function add()
    {
        $sql="Insert into bills (`value`, `idCategory`, `idReport`) VALUES (?, ?, ?)";
        $conex = new ConexDB();
        $resultDb = $conex->prepare($sql);
        // if($sql){
        //     throw new \Exception("Error preparando la consulta SQL.");
        // }
       // Asumimos: value = float, category_id = int, report_id = int
        $resultDb->bind_param("dii", $data['value'], $data['category_id'], $data['report_id']);

        $resultDb->execute();
        if ($sql->error) {
        throw new \Exception("Error al ejecutar: " . $sql->error);
    }
        $conex->close();

    }

    public function modifyValue()
    {
         $sql = "UPDATE bills SET idCategory = ?, value = ? WHERE id = ?";
        $conex = new ConexDB();
        $resultDb = $conex->prepare($sql);
        $resultDb->bind_param("id", $idCategory , $value, $id);
        $resultDb->execute();
        $conex->close();

    }

    public function delete($id)
    {
        $sql = "DELETE FROM bills WHERE id = ?";
       $conex = new ConexDB();
        $resultDb = $conex->execSQL($sql,[$id]);
        $conex->close();
        return $resultDb>0?"Gasto eliminado correctamente." : "No se encontró el gasto con ese ID.";

    }
    // public function delete($id) {
    //     if (!is_numeric($id) || $id <= 0) {
    //         return "ID inválido.";
    //     }
}
