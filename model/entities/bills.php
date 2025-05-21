<?php

namespace app\models\entities;

use app\models\drivers\ConexDB;
use app\models\entities\billReport;


class Bills
{
    private ConexDB $conex;
    private $id = 0;
    private $value = 0;
    private $idCategory = 0;
    private $idReport = 0;
    
    public function setConex(ConexDB $conex)
    {
        $this->conex=$conex;
    }
    public function __construct($id,$value,$idCategory = 0,$idReport = 0)
    {
        $this->id=$id;
        $this->value=$value;
        $this->idCategory=$idCategory;
        $this->idReport=$idReport;

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
    public function getBillsByReport($idReport)
{
    $sql = "SELECT b.id, b.value, b.idCategory, b.idReport, c.name, c.percentage, i.value AS incomeValue, 
                   (b.value / i.value) * 100 AS porcentaje_ex, 
                   CASE WHEN ((b.value / i.value) * 100) > c.percentage THEN 'Overspending' ELSE 'OK' END AS Result,
                   c.percentage - ((b.value / i.value) * 100) AS Ahorro 
            FROM bills AS b 
            INNER JOIN categories AS c ON b.idCategory = c.id 
            INNER JOIN income AS i ON b.idReport = i.idReport 
            WHERE i.idReport = " . $idReport;

    $resultDb = $this->conex->execSQL($sql);
    $billsReport = [];

    if ($resultDb->num_rows > 0) {
        while ($rowDb = $resultDb->fetch_assoc()) {
            // Create a new BillReport object for each row
            $billsReport[] = new BillReport(
                $rowDb['id'],
                $rowDb['value'],
                $rowDb['idCategory'],
                $rowDb['idReport'],
                $rowDb['name'], // category name
                $rowDb['percentage'], // category percentage
                $rowDb['incomeValue'], // income value
                $rowDb['porcentaje_ex'],
                $rowDb['Result'],
                $rowDb['Ahorro']
            );
        }
    }
    $this->conex->close();
    return $billsReport; // Return the array of BillReport objects
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
