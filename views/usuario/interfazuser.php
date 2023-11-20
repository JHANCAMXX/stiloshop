<?php
session_start();

if (isset($_SESSION['nameuser'])) {
    $nameuser = $_SESSION['nameuser'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz de Usuario</title>
    <link rel="stylesheet" href="public/css/interfazuser.css"> 
</head>

<body>

    <div class="contenedor">
        <h1>Bienvenido a la Interfaz de Usuario</h1>
        <p>¡Gracias por registrarte!</p>
        <p>Tu nombre de usuario es: <?php echo $nameuser; ?></p>
    </div>

</body>
</html>

<?php
} else {
    // Redirigir a la página de inicio de sesión o mostrar un mensaje de error
    header("Location: ../index.php");
    exit();
}
?>