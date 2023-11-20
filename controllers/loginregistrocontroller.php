<?php

class LoginRegistroController {
    public function login() {
        // Crear una instancia de la clase DatabaseModel
        $db = new DatabaseModel();

        // Verificar la conexión y mostrar un mensaje
        $db->verificarConexion();

        require_once 'views/loginRegistro.php';
    }
}

?>
