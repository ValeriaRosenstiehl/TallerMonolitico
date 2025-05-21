<?php

namespace app\models\drivers;

use mysqli;
use Exception;

class ConexDB {
    private $host = 'localhost';
    private $user = 'root';
    private $pwd = 'BASES2025';
    private $nameDB = 'proyecto_1_db';

    private $conex = null;

    public function __construct()
    {
        try{
       
        $this->conex = new mysqli(
            $this->host,
            $this->user,
            $this->pwd,
            $this->nameDB
        );
            if ($this->conex->connect_error) {
                die("Failed Connection: " . $this->conex->connect_error);
                return;
            }
           
         if ($this->conex->connect_error) {
                 echo "Error de conexión: " . $this->conex->connect_error;
             }
             } catch (Exception $e) {
             echo "No se pudo establecer conexión con la base de datos: " . $e->getMessage();
          }
    }
    

      public function execSQL($sql){
        return $this->conex->query($sql);
        
    }
    // public function execSQL($sql){
    //    try {
    //         $result = $this->conex->query($sql);
    //         if ($this->conex->error) {
    //             throw new Exception("Error en la consulta: " . $this->conex->error);
    //         }
    //         return $result;
    //     } catch (Exception $e) {
    //         throw new Exception("Error ejecutando SQL: " . $e->getMessage());
    //     }
    // }
    // public function prepare($sql)
    // {
    //     try {
    //         $sql = $this->conex->prepare($sql);
    //         if (!$sql) {
    //             throw new Exception("Error preparando la consulta: " . $this->conex->error);
    //         }
    //         return $sql;
    //     } catch (Exception $e) {
    //         throw new Exception("Error en prepare: " . $e->getMessage());
    //     }
    // }

    public function close(){
       if ($this->conex) {
            $this->conex->close();
        }
    }

}