<?php

include_once "models/usuarioModel.php";
include_once 'models/login.php'; 

class Logincontroller {

    
    private $object; 
    private $clase; 

    public function __construct() {
        $this->object = new UsuarioModel();
        $this->clase = new login(); 
    }

    public static function index() {
        require_once 'views/login/loginRegistro.php';
    }

    public function registrarUsuario() {
        // Recoger datos del formulario
        $nameuser = $_POST['nameuser'];
        $typeDocument = $_POST['document'];
        $email = $_POST['email'];
        $sexo = $_POST['sexo'];
        $datebirth = $_POST['fecha'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash de la contraseña

        // Validar y procesar los datos (puedes hacer más validaciones aquí)

        // Llamar al modelo para registrar el usuario
        require_once 'models/UsuarioModel.php';
        if($this->object->registrarUsuario($nameuser, $email,$password, $sexo, $datebirth)){
            header('Location: ?a=login');
        }else{
            echo "error". $e->getMessage();
        }

        // Redirigir a donde sea necesario después del registro
        
    }

    public function logIn(){
        if(empty($_POST['email']) || empty($_POST['pass'])){
            header('Location: ?a=login');
        }else{
            if($this->clase->verifyUser($_POST['email'], $_POST['pass'])){
                header('location: ?a=userperfil&f=perfil'); 
            }else{
                $this->clase->verifyUser($_POST['email'], $_POST['pass']); 
            }
        }
    }

}

?>