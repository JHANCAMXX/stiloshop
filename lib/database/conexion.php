<?php

class DatabaseModel {
    public static function conexion(){
        $host = "localhost";
        $usuario = "root";
        $contrasena = "";
        $db = "stilo";
        $conexion = new PDO("mysql:host=$host;dbname=$db", $usuario, $contrasena);
        return $conexion;
    }

}

?>
