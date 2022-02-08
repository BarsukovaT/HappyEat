<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--BOOSTRAP-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!--PROPIOS-->
    <link rel="stylesheet" href="CSS/estilo.css">
    <script src="JS/script.js"></script>
<div>


    <title>HappyEat - Access</title>
</head>

<body>
    <header class="header">
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark navi">
        <a class="navbar-brand" href="#">HappyEat</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="bi bi-house-door nav-link" href="index.php"> Home</a>
                </li>
                <li id="access" class="nav-item active">
                    <a class="bi bi-key nav-link" href="#"> Acceder</a>
                </li>
                <li id="perfil" class="nav-item dropdown" style="display: none">
                    <a class="bi bi-person-circle nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Perfil</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="bi bi-star dropdown-item" href="#"> Favoritos</a>
                        <a class="bi bi-lock dropdown-item" href="#"> Desconectar</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="recipe" class="bi bi-receipt-cutoff nav-link dropdown-toggle disabled" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Recetas</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="bi bi-heart dropdown-item" href="recetas_saludables.html"> Saluables</a>
                        <a class="bi bi-people dropdown-item" href="#"> De la comunidad</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a id="plan" class="bi bi-calendar3  nav-link disabled" href="planificador.php"> Planificador</a>
                </li>
                <li class="nav-item">
                    <a id="list" class="bi bi-basket nav-link disabled" href="#"> Lista</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>

    <section>

        <main>

            <div class="contenedor_todo">

                <div class="caja_trasera">
                    <div class="caja_trasera_login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para acceder</p>
                        <button onclick="login()" id="btn_iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja_trasera_register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Registrarse para Iniciar Sesiónr</p>
                        <button onclick="register()" id="btn_register">Registrarse</button>
                    </div>
                </div>

                <!-- Formulario Login y Registro -->

                <div class="contenedor_login-register">

                    <form action="php/login_usuario_be.php" method= "POST" class="forumlario_login">
                        <h2>Iniciar Sesion</h2>
                        <input type="email" placeholder="E-Mail" name="email_usuario">
                        <input type="password" placeholder="Contraseña" name="pass_usuario">
                        <i>Usuario o contraseña incorrectos.</i>
                        <button>Entrar</button>
                    </form>

                    <!-- Formulario Registro -->

                    <form id = "f_registro" action="php/registro_usuario_be.php" method="POST" class="formulario_register">
                        <h2>Registrarse</h2>
                        <input  id ="n_completo" required type="text" placeholder="Nombre Completo *" name="nombre_usuario">
                        <input  id ="correo" required type="email" placeholder="E-Mail *" name="email_usuario">
                        <input  id ="user" required type="text" placeholder="Usuario *" name="user_usuario">
                        <input  id ="con" required type="password" placeholder="Contraseña *" name = "pass_usuario">
                        <i id="alerta">Por favor, rellene todos los campos para completar el registro.</i>
                        <button id="reg" onclick = 'validarFormulario()' name="registrar">Registrarse</button>
                    </form>

                </div>

            </div>

        </main>

    </section>

    <footer id="pie">
    <?php
        include "php/footer.php";
        ?>
    </footer>

</body>

</html>