<?php

namespace app\model\entities;

use app\models\drivers\ConexDB;

class Category
{
    private $conex;
    private $id = 0;
    private $name = null;
    private $percentage = null;


     public function setConex($conex)
    {
        $this->$conex=$conex;
    }
    public function __construct($id,$name,$percentage)
    {
        $this->$id=$id;
        $this->$name=$name;
        $this->$percentage=$percentage;
       

    }

     public function show()
    {
         $sql = "SELECT * FROM categories";
        
        $resultDb = $this->conex->execSQL($sql);
        $categories = [];

        if ($resultDb->num_rows > 0) {
            while ($rowDb = $resultDb->fetch_assoc()) {
                $categories[] = [];
                $categories[] = new Category($rowDb['id'], $rowDb['name'],$rowDb['percentage']);
            }
        }
        $this->conex->close();
        return $categories; 

    }

    public function add()
    {
        $sql="Insert into bills (`name`, `percentage`) VALUES (".$this->name.", ".$this->percentage.")";
        
        $this->conex->execSQL($sql);
    //     // Validate inputs
    // if (empty($name)) {
    //     throw new Exception("El nombre de la categoría no puede estar vacío.");
    // }
    // if ($percentage <= 0 || $percentage > 100) {
    //     throw new Exception("El porcentaje debe ser mayor que cero y no superar el 100%.");
    // }
    $this->conex->close();

    }

    public function modify()
    {
        $sql = "UPDATE categories SET name = ".$this->name." WHERE id = ".$this->id."";
        $sql = "UPDATE categories SET percentage = ".$this->percentage." WHERE id = ".$this->id.""; 
        
        $this->conex->execSQL($sql);
        $this->conex->close();

  /**Validaciones
   if (empty($newName)) {
         throw new Exception("El nombre de la categoría no puede estar vacío.");
     }
    if ($newPercentage <= 0 || $newPercentage > 100) {
         throw new Exception("El porcentaje debe ser mayor que cero y no superar el 100%.");
     }
    $resultDb = "SELECT COUNT(*) as total FROM expense WHERE category_id = ?";
    $resultDb = $conex->prepare($resultDb);
   $resultDb->bind_param("i", $id);
    $$resultDb->execute();
    $result = $resultDb->get_result();
    $row = $result->fetch_assoc();
    if ($row['total'] > 0) {
        $resultDb->close();
        $conex->close();
        throw new Exception("No se puede modificar la categoría porque está relacionada a gastos.");
    }
    $resultDb->close();

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
    return true;*/

    }

    public function delete($id)
    {
       $sql = "DELETE FROM categories WHERE id = ".$id."";
        $this->conex->execSQL($sql);
        $this->conex->close(); 

  /**Verificar si la categoría está relacionada con algún gasto
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
    return true;*/

    }
}