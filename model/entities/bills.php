<?php

namespace app\models\entities;

use app\models\drivers\ConexDB;


class Bills
{
    private $conex;
    private $id = 0;
    private $value = 0;
    private $idCategory = 0;
    private $idReport = 0;
    
    public function setConex($conex)
    {
        $this->$conex=$conex;
    }
    public function __construct($id,$value,$idCategory = 0,$idReport = 0)
    {
        $this->$id=$id;
        $this->$value=$value;
        $this->$idCategory=$idCategory;
        $this->$idReport=$idReport;

    }

    

    public function show()
    {
         $sql = "SELECT * FROM bills";
        
        $resultDb = $this->conex->execSQL($sql);
        $bills = [];

        if ($resultDb->num_rows > 0) {
            while ($rowDb = $resultDb->fetch_assoc()) {
                $bills[] = [];
                $bills[] = new Bills($rowDb['id'], $rowDb['value'],$rowDb['idCategory'],$rowDb['idReport']);
                

            }
        }

        $this->conex->close();
        return $bills; 

    }

    public function add()
    {
        $sql="Insert into bills (`value`, `idCategory`, `idReport`) VALUES (".$this->value.", ".$this->idCategory.", ".$this->idReport.")";
        
        $this->conex->execSQL($sql);

        // if($sql){
        //     throw new \Exception("Error preparando la consulta SQL.");
        // }
       // Asumimos: value = float, category_id = int, report_id = int
        
        //if ($sql->error) {
       // throw new \Exception("Error al ejecutar: " . $sql->error);
       $this->conex->close();
    }
        

    public function modifyValue()
    {
        $sql = "UPDATE bills SET value = ".$this->value." WHERE id = ".$this->id."";
        $this->conex->execSQL($sql);
        $this->conex->close();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM bills WHERE id = ".$id."";
        $this->conex->execSQL($sql);
        $this->conex->close();

    }
    // public function delete($id) {
    //     if (!is_numeric($id) || $id <= 0) {
    //         return "ID inválido.";
    //     }
}
