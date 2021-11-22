<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--BOOSTRAP-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!--PROPIOS-->
    <link rel="stylesheet" href="CSS/estilo.css">
    <script src="JS/script.js"></script>



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
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li id="access" class="nav-item active">
                    <a class="nav-link" href="#">Acceder</a>
                </li>
                <li id="perfil" class="nav-item dropdown" style="display: none">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Perfil</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Favoritos</a>
                        <a class="dropdown-item" href="#">Desconectar</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="recipe" class="nav-link dropdown-toggle disabled" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Recetas</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="recetas_saludables.html">Saluables</a>
                        <a class="dropdown-item" href="#">De la comunidad</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a id="plan" class="nav-link disabled" href="#">Planificador</a>
                </li>
                <li class="nav-item">
                    <a id="list" class="nav-link disabled" href="#">Lista</a>
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
                        <input type="email" placeholder="E-Mail" name="email">
                        <input type="password" placeholder="Contraseña" name="pass">
                        <button>Entrar</button>
                    </form>

                    <!-- Formulario Registro -->

                    <form id = "f_registro" action="php/registro_usuario_be.php" method="POST" class="formulario_register">
                        <h2>Registrarse</h2>
                        <input  id ="n_completo" type="text" placeholder="Nombre Completo" name="nombre_completo">
                        <input  id ="correo" type="email" placeholder="E-Mail" name="email">
                        <input  id ="user" type="text" placeholder="Usuario" name="usuario">
                        <input required id ="con" type="password" placeholder="Contraseña" name = "pass">
                        <button id="reg" onclick = 'validarFormulario()' name="registrar">Registrarse</button>
                    </form>

                </div>

            </div>

        </main>

    </section>

    <footer id="pie">
        <div class="pleft">
            <h3>Contactacta con Nosotros</h3>
            <p>Calle Digital Nº38</p>
            <p>29008 Málaga</p>
            <p><a href="mailto:correo@correo_ejemplo.com?subject=Saludos&cc=correo2correo_ejemplo.com">Empresa@grupo.es</a></p>
            <p>Tlf: 699 88 00 77</p>
        </div>
        <div class="pcenter">
            <ul>
                <li><a href="#">Politica de cookies</a></li>
                <li><a href="#">Politica de privacidad</a></li>
                <li><a href="#">Aviso legal</a></li>
            </ul>
        </div>
        <div class="pright">
            <a href="#"><img src="img/fb.png" alt="What's App" /></a>
            <a href="#"><img src="img/insrta.png" alt="Cuenta de Instagram" /></a>
            <a href="#"><img src="img/twi.png" alt="Cuenta de Twitter" /></a>
        </div>
    </footer>

</body>

</html>