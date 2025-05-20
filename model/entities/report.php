<?php

namespace app\model\entities;

use app\models\drivers\ConexDB;

class Report
{
    private ConexDB $conex;
    private $id = 0;
    private $month = null;
    private $year = 0;

    
    public function setConex(ConexDB $conex)
    {
        $this->conex=$conex;
    }
    public function __construct($id,$month,$year)
    {
        $this->id=$id;
        $this->month=$month;
        $this->year=$year;

    }
    public function getId() {
        return $this->id;
    }

    public function getMonth() {
        return $this->month;
    }
    public function getYear() {
        return $this->year;
    }
    
    public function show()
    {
        $sql = "SELECT * FROM reports";
        
        $resultDb = $this->conex->execSQL($sql);
        $report = [];

        if ($resultDb->num_rows > 0) {
            while ($rowDb = $resultDb->fetch_assoc()) {
                $report[] = [];
                $report[] = new Report($rowDb['id'], $rowDb['month'], $rowDb['year']);
            }
        }

        $this->conex->close();
        return $report; 

    }

    public function add()
    {
        $sql="Insert into reports (`month`, `year`) VALUES ('".$this->month."', ".$this->year.")";
        $this->conex->execSQL($sql);
        $this->conex->close();

    }

   
}