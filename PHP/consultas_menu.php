<?php
require "conexion_be.php";


    $query_d = "SELECT * FROM recetas WHERE id_tipo = 1 ORDER BY rand() LIMIT 1";
    $query_a = "SELECT * FROM recetas WHERE id_tipo = 2 ORDER BY rand() LIMIT 1";
    $query_c = "SELECT * FROM recetas WHERE id_tipo = 3 ORDER BY rand() LIMIT 1";

    $query_desayuno = mysqli_query($conexion, $query_d);
    $query_almuerzo = mysqli_query($conexion, $query_a);
    $query_cena = mysqli_query($conexion, $query_c);

    mysqli_close($conexion);

    $array_desayuno = mysqli_fetch_array($query_desayuno);
    $array_almuerzo = mysqli_fetch_array($query_almuerzo);
    $array_cena = mysqli_fetch_array($query_cena);

    $_SESSION['id_desayuno'] = $array_desayuno['id_receta'];
    $_SESSION['id_almuerzo'] = $array_desayuno['id_receta'];
    $_SESSION['id_cena'] = $array_desayuno['id_receta'];

?>