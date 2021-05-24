<?php

include_once 'conexion.php';

Class mdlRegister{

    public function mdlNewRegister($tabla, $datos){
        $correo = $datos["emailusr"];
        $sql = (new Conexion)->conectar()->prepare("SELECT * FROM $tabla WHERE correo = '$correo'");
        $sql -> execute();
        if ( $sql->fetch() ){
            $res = "existe";
        }else{
            $res = "vacio";
        }

        if($res == "existe"){
            return "error";
        } else {
            $sql = (new Conexion)->conectar()->prepare("INSERT INTO $tabla() VALUES (NULL, :nombre, :apellido, :direccion, :correo, :telefono)");

            $sql -> bindParam(":nombre", $datos["nameusr"], PDO::PARAM_STR);
            $sql -> bindParam(":apellido", $datos["lastusr"], PDO::PARAM_STR);
            $sql -> bindParam(":direccion", $datos["addressusr"], PDO::PARAM_STR);
            $sql -> bindParam(":correo", $datos["emailusr"], PDO::PARAM_STR);
            $sql -> bindParam(":telefono", $datos["phoneusr"], PDO::PARAM_STR);
            
            if ( $sql -> execute() ){
                return "ok";
            } else {
                return "error";
            }
        }   
    }
}

?>