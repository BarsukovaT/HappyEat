<?php
include "php/no_sesion.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--BOOSTRAP-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!--OTROS-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!--PROPIOS-->
    <link rel="stylesheet" href="CSS/estilo.css">
    <script src="js/script.js"></script>


    <title>HappyEat - Recetas de Sopas</title>
    
</head>

<body>
    <header class="header"></header>

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
                <li class="nav-item dropdown">
                    <a class="bi bi-person-circle nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Perfil</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="bi bi-star dropdown-item" href="#"> Favoritos</a>
                        <a class="bi bi-lock dropdown-item" href="php/cerrar_sesion.php"> Desconectar</a>
                    </div>
                </li>
                <li class="nav-item dropdown active">
                    <a class="bi bi-receipt-cutoff nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Recetas</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="bi bi-heart dropdown-item" href="recetas_saludables.php"> Saluables<span class="sr-only">(current)</span></a>
                        <a class="bi bi-people dropdown-item" href="#"> De la comunidad</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="bi bi-calendar3  nav-link" href="planificador.php"> Planificador</a>
                </li>
                <li class="nav-item">
                    <a class="bi bi-basket nav-link" href="#"> Lista</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>

    <section class="contenido">

        <div class="texto">

            <h2>¡Disfruta de las SOPAS de <spam class="empresa"> HappyEat!</spam></h2>
                <br><br><br>
        
            
            <div class="tabla">
    
                <?php
                include "php/tablas_recetas_sopas.php";
                ?>

            </div>
            
        </div>

    </section>

    <footer id="pie">
        <?php
            include "php/footer.php";
        ?>
    </footer>

</body>

</html>