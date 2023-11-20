<?php

class HomeController {

    public function index() {
        require_once 'views/header.php';
        require_once 'views/home.php';
        require_once 'views/footer.php';
    }
    
    public static function login(){
        echo "Estoy en el login";
    }

}
?>

    