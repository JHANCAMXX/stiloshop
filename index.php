<?php

$controller = "home"; 

if(!isset($_REQUEST['a'])){
    require_once "controllers/".$controller."controller.php";
    $controller = ucwords($controller)."controller";
    $controller = new $controller;
    $controller->index();

} else{
    $controller = strtolower($_REQUEST["a"]);
    require_once "controllers/".$controller."controller.php";
    $function = (isset($_REQUEST['f'])) ? $_REQUEST['f'] : "index";  
    $param = (isset($_REQUEST['p'])) ? explode('/', $_REQUEST['p']) : array();
    $controller = ucwords($controller)."controller";
    $controller = new $controller;
    call_user_func_array(array($controller, $function), $param);
}


?>

