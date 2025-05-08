<?php

namespace app\model\entities;

use app\model\drivers\ConexDB;

class Category extends Transaction
{
    public function percentage()
    {


    }

    public function all()
    {
        $sql = "select * from category";
        $conex = new ConexDB();
        $resultDb = $conex->execSQL($sql);
        $category = [];
        if ($resultDb->num_rows > 0) {
            while ($rowDb = $resultDb->fetch_assoc()) {
                $category = new category();
                $category->set('id', $rowDb['id']);
                $category->set('name', $rowDb['nombre']);
                $category->set('percentaje', $rowDb['percentaje']);
                array_push($categories, $category);
            }
        }
        $conex->close();
        return $categories;
    }

    public function add()
    {
        // Validate inputs
    if (empty($name)) {
        throw new Exception("El nombre de la categoría no puede estar vacío.");
    }
    if ($percentage <= 0 || $percentage > 100) {
        throw new Exception("El porcentaje debe ser mayor que cero y no superar el 100%.");
    }

    // Prepare SQL statement
    $sql = "INSERT INTO category (nombre, percentaje) VALUES (?, ?)";
    $conex = new ConexDB();
    $resultDb = $conex->execSQL($sql);
    
    // Bind parameters and execute
    if ($resultDb) {
        $resultDb->bind_param("sd", $name, $percentage); 
        if ($resultDb->execute()) {
            $resultDb->close();
            $resultDb->close();
            return true; // Successfully added
        } else {
            throw new Exception("Error al agregar la categoría: " . $resultDb->error);
        }
    } else {
        throw new Exception("Error al preparar la consulta: " . $conex->error);
    }

    }

    public function modify()
    {
        // Validaciones
    if (empty($newName)) {
        throw new Exception("El nombre de la categoría no puede estar vacío.");
    }
    if ($newPercentage <= 0 || $newPercentage > 100) {
        throw new Exception("El porcentaje debe ser mayor que cero y no superar el 100%.");
    }

    $conex = new ConexDB();

    // Verificar si la categoría está relacionada con algún gasto
    $sqlCheck = "SELECT COUNT(*) as total FROM expense WHERE category_id = ?";
    $stmtCheck = $conex->prepare($sqlCheck);
    $stmtCheck->bind_param("i", $id);
    $stmtCheck->execute();
    $result = $stmtCheck->get_result();
    $row = $result->fetch_assoc();
    if ($row['total'] > 0) {
        $stmtCheck->close();
        $conex->close();
        throw new Exception("No se puede modificar la categoría porque está relacionada a gastos.");
    }
    $stmtCheck->close();

    // Preparar y ejecutar la actualización
    $sql = "UPDATE category SET nombre = ?, percentaje = ? WHERE id = ?";
    $resultDb = $conex->prepare($sql);
    if (!$resultDb) {
        $conex->close();
        throw new Exception("Error al preparar la consulta: " . $conex->error);
    }
    $resultDb->bind_param("sdi", $newName, $newPercentage, $id);
    $resultado = $resultDb->execute();
    $resultDb->close();
    $conex->close();

    if (!$resultado) {
        throw new Exception("Error al modificar la categoría.");
    }
    return true;

    }

    public function delete()
    {
        $conex = new ConexDB();

    // Verificar si la categoría está relacionada con algún gasto
    $sqlCheck = "SELECT COUNT(*) as total FROM expense WHERE category_id = ?";
    $stmtCheck = $conex->prepare($sqlCheck);
    $stmtCheck->bind_param("i", $id);
    $stmtCheck->execute();
    $result = $stmtCheck->get_result();
    $row = $result->fetch_assoc();
    if ($row['total'] > 0) {
        $stmtCheck->close();
        $conex->close();
        throw new Exception("No se puede eliminar la categoría porque está relacionada a gastos.");
    }
    $stmtCheck->close();

    // Preparar y ejecutar la eliminación
    $sql = "DELETE FROM category WHERE id = ?";
    $resultDb= $conex->prepare($sql);
    if (!$resultDb) {
        $conex->close();
        throw new Exception("Error al preparar la consulta: " . $conex->error);
    }
    $resultDb->bind_param("i", $id);
    $resultado = $resultDb->execute();
    $resultDb->close();
    $conex->close();

    if (!$resultado) {
        throw new Exception("Error al eliminar la categoría.");
    }
    return true;

    }
}