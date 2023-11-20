<?php
require_once 'lib/database/conexion.php'; 

class UsuarioModel {
    private $conexion;

    public function __construct() {
        $this->conexion = DatabaseModel::conexion();
    }

    public function registrarUsuario($nameuser, $email, $contrauser, $sexo, $datebirth) {
        try {
            // Preparar la consulta SQL
            $stmt = $this->conexion->prepare("INSERT INTO usuarios(nameuser, email, contrauser, sexo, datebirth) VALUES ('".$nameuser."', '".$email."', '".$contrauser."', '".$sexo."', '".$datebirth."')")->execute();

            if($stmt){
                return true;
            }else{
                return false;
            }
        } catch (PDOException $e) {
            echo "Error al registrar usuario: " . $e->getMessage();
            return false;
        }
    }
}
?>
