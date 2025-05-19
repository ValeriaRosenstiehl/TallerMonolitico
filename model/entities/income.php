<?php

namespace app\model\entities;

use app\models\drivers\ConexDB;

class Income
{
    private $conex;
    private $id = 0;
    private $value = 0;
    private $idReport = 0;
    
    public function setConex($conex)
    {
        $this->$conex=$conex;
    }
    public function __construct($id,$value = 0.0,$idReport = 0)
    {
        $this->$id=$id;
        $this->$value=$value;
        $this->$idReport=$idReport;

    }
    public function all()
    {
        $sql = "SELECT * FROM income";
        
        $resultDb = $this->conex->execSQL($sql);
        $income = [];

        if ($resultDb->num_rows > 0) {
            while ($rowDb = $resultDb->fetch_assoc()) {
                $income[] = [];
                $income[] = new Income($rowDb['id'], $rowDb['value'], $rowDb['idReport']);
            }
        }

        $this->conex->close();
        return $income; 

    }

    public function add()
    {
        $sql="Insert into bills (`value`, `idReport`) VALUES (".$this->value.", ".$this->idReport.")";
        $this->conex->execSQL($sql);
        $this->conex->close();

    }

    public function modifyValue()
    {
        $sql = "UPDATE income SET value = ".$this->value." WHERE id = ".$this->id."";
        $this->conex->execSQL($sql);
        $this->conex->close();

    }
}
