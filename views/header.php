<!DOCTYPE html>
<html lang="es">
hola
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Sitio Web</title>
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/home.css">
</head>

<body>
    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
        <a href="#" class="logo"> StiloShop<span>.</span></a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#products">products</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </nav>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="?a=login&f=index" class="fas fa-user"></a>
        </div>
    </header>
    <?php // echo (isset($style)) ? $style : "" 
    ?>