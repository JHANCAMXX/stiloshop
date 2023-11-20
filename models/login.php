<?php 

include_once "lib/database/conexion.php"; 

class login{

    private $conexion; 

    public function __construct(){
        $this->conexion = DatabaseModel::conexion();
    }

    public function verifyUser($email, $pass){
        try {
            $sql = "SELECT nameuser FROM usuarios WHERE email=:email AND contrauser=:pass";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
            $stmt->execute();
            
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
        
            if ($data) {
                return $usuario = $data['nameuser'];
            } else {
                return "Usuario no encontrado";
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
        
    }


}