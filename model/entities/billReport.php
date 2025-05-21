<?php
namespace app\models\entities;

class BillReport {
    private $id;
    private $value;
    private $idCategory;
    private $idReport;
    private $categoryName;
    private $categoryPercentage;
    private $incomeValue;
    private $porcentajeEx;
    private $result;
    private $ahorro;

    // Constructor
    public function __construct($id, $value, $idCategory, $idReport, $categoryName, $categoryPercentage, $incomeValue, $porcentajeEx, $result, $ahorro) {
        $this->id = $id;
        $this->value = $value;
        $this->idCategory = $idCategory;
        $this->idReport = $idReport;
        $this->categoryName = $categoryName;
        $this->categoryPercentage = $categoryPercentage;
        $this->incomeValue = $incomeValue;
        $this->porcentajeEx = $porcentajeEx;
        $this->result = $result;
        $this->ahorro = $ahorro;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getValue() {
        return $this->value;
    }

    public function getIdCategory() {
        return $this->idCategory;
    }

    public function getIdReport() {
        return $this->idReport;
    }

    public function getCategoryName() {
        return $this->categoryName;
    }

    public function getCategoryPercentage() {
        return $this->categoryPercentage;
    }

    public function getIncomeValue() {
        return $this->incomeValue;
    }

    public function getPorcentajeEx() {
        return $this->porcentajeEx;
    }

    public function getResult() {
        return $this->result;
    }

    public function getAhorro() {
        return $this->ahorro;
    }

    
}
