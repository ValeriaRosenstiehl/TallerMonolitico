<?php

namespace app\model\entities;

use app\model\drivers\ConexDB;

class Expenses extends Transaction
{
    public function all()
    {
         $sql = "SELECT * FROM reports";
        $conex = new ConexDB();
        $resultDb = $conex->execSQL($sql);
        $idreport = [];

        if ($resultDb->num_rows > 0) {
            while ($rowDb = $resultDb->fetch_assoc()) {
                $reports = new reports();
                $reports->set('id', $rowDb['id']);
                $reports->set('month', $rowDb['month']);
                $reports->set('anio', $rowDb['anio']);
                $reports[] = $reports;
            }
        }

        $conex->close();
        return $idreport; 

    }
    public function add()
    {
        $sql="Insert into reports (`month`, `anio`) VALUES (?, ?)";
        $conex = new ConexDB();
        $resultDb = $conex->prepare($sql);
        // if($sql){
        //     throw new \Exception("Error preparando la consulta SQL.");
        // }
       // Asumimos: value = float, category_id = int, report_id = int
        $resultDb->bind_param("ii", $mont,$anio);

        $resultDb->execute();
        if ($sql->error) {
        throw new \Exception("Error al ejecutar: " . $sql->error);
    }
        $conex->close();

    }
   

} 