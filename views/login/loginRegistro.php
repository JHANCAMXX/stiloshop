<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/Styleshop/public/css/loginRegistro.css">
    <title>Login y Register</title>
</head>
<body>
    <div class="container-form register">
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenido</h2>
                <p>Para Unirte a Nuestra Comunidad Por Favor Inicia Sesión Con Tus 
                Datos </p>
                <input type="button" value="Iniciar Sesión" id="sign-in"><br><br>
                <a href="?"><input type="button"  value="Inicio"></a>   
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Crear Una Cuenta</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-github'></i>
                    <i class='bx bxl-linkedin'></i>
                </div>
                <p>O Completa el Siguiente Formulario</p>
                <form class="form" action="?a=login&f=registrarUsuario" method="post">
                    <label>
                        <i class='bx bxs-user' ></i>
                        <input type="text" name="nameuser" placeholder="Nombres Completo">
                    </label>
                    <label>
                        <i class='bx bxs-id-card'></i>
                        <input type="number" name="document" placeholder="Numero de documento">
                    </label>
                    <label>
                        <i class='bx bxs-envelope' ></i>
                        <input type="email" name="email" placeholder="Correo Electronico">
                    </label>
                    <label>
                        <i class='bx bx-male-female'></i>
                        <input type="radio" name="sexo" value="Masculino">Masculino
                        <input type="radio" name="sexo" value="Femenino">Femenino
                    </label>
                    <label>
                        <i class='bx bxs-baby-carriage'></i>
                        <input type="date" name="fecha">
                    </label>
                    <label>
                        <i class='bx bxs-lock' ></i>
                        <input type="password" name="password" placeholder="Contraseña">
                    </label>
                    <input type="submit" value="Registrarse">
                </form>
            </div>
        </div>
    </div>
    <div class="container-form login hide">
        <div class="information">
            <div class="info-childs">
                <h2>¡¡Bienvenido nuevamente!!</h2>
                <p>Si aun no tienes una cuenta por favor registrese aqui </p>
                <input type="button" value="Registrarse" id="sign-up"><br><br>
            <a href="?"><input type="button"  value="Inicio"></a>   
            </div>
        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Iniciar Sesión</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-github'></i>
                    <i class='bx bxl-linkedin'></i>
                </div>
                <p>O Iniciar Sesión con una cuenta</p>
                <form class="form" action="?a=login&f=logIn" method="post">
                    <label>
                        <i class='bx bxs-envelope' ></i>
                        <input type="email" name="email" placeholder="Correo Electronico">
                    </label>
                    <label>
                        <i class='bx bxs-lock' ></i>
                        <input type="password" name="pass" placeholder="Contraseña">
                    </label>
                    <input type="submit" value="Iniciar Sesion">
                </form>
            </div>
        </div>
    </div>
    <script src="/Styleshop/public/js/loginRegistro.js"></script>
</body>
</html>