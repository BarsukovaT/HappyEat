<?php

    session_start();

    include "conexion_be.php";

    $email = $_POST['email'];
    $pass = $_POST['pass'];


    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email' and pass = '$pass'");

    if(mysqli_num_rows($validar_login)> 0){
        $_SESSION['usuario'] = $email;
        header("location: ../index.php");
        mysqli_close($conexion);
        exit();
    }

    else{
        echo '<script>
                alert("Ese usuario no existe");
                window.location = "../login.php";
            </script>';
        mysqli_close($conexion);
        exit();
    }


?>