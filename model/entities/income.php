<?php

namespace app\model\entities;

use app\model\drivers\ConexDB;

class Income extends Transaction
{
    public function all()
    {
        $sql = "SELECT * FROM incomes";
    $conex = new ConexDB();
    $resultDb = $conex->execSQL($sql);

    $incomes = [];

    while ($row = $result->fetch_assoc()) {
        $income = new Income();
        $income->set('id', $row['id']);
        $income->set('month', $row['month']);
        $income->set('year', $row['year']);
        $income->set('value', $row['value']);
        $incomes[] = $income;
    }

    $conex->close();
    return $incomes;

    }

    public function add($month, $year, $value)
    {
        if ($value < 0) {
            throw new \Exception("El valor del ingreso no puede ser negativo.");
        }

        if ($this->exists($month, $year)) {
            throw new \Exception("Ya existe un ingreso registrado para ese mes y año.");
        }

        $sql = "INSERT INTO incomes (month, year, value) VALUES (?, ?, ?)";
        $conex = new ConexDB();
        $resultDb= $conex->prepare($sql);
        $resultDb->bind_param("sid", $month, $year, $value);
        $resultDb->execute();
        $resultDb->close();

    }

    public function modifyValue()
    {
        if ($value < 0) {
            throw new \Exception("El valor del ingreso no puede ser negativo.");
        }

        $sql = "UPDATE incomes SET value = ? WHERE month = ? AND year = ?";
        $conex = new ConexDB();
        $resultDb= $conex->prepare($sql);
        $resultDb->bind_param("dsi", $value, $month, $year);
        $resultDb->execute();

        if ($resultDb->affected_rows === 0) {
            throw new \Exception("No se encontró ingreso para ese mes y año.");
        }

        $conex->close();

    }
}
