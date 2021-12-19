
<header class="header">
</header>
<nav class="navbar navbar-expand-lg navbar-dark navi">
        <a class="navbar-brand" href="#">HappyEat</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li id="access" class="nav-item" style="display: block">
                    <a class="nav-link" href="login.php">Acceder</a>
                </li>
                <li id="perfil" class="nav-item dropdown" style="display: none">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Perfil</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Favoritos</a>
                        <a class="dropdown-item" href="php/cerrar_sesion.php">Desconectar</a>
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
                    <a id= "plan" class="nav-link disabled" href="#">Planificador</a>
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
