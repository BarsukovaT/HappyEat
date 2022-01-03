<?php
require "conexion_be.php";


    $query_1 = "SELECT * FROM recetas WHERE id_categoria = 1";
    $query_2 = "SELECT * FROM recetas WHERE id_categoria = 2";
    $query_3 = "SELECT * FROM recetas WHERE id_categoria = 3";

    $query_pasta = mysqli_query($conexion, $query_1);
    $query_ensalada = mysqli_query($conexion, $query_2);
    $query_sopa = mysqli_query($conexion, $query_3);

    mysqli_close($conexion);
?>