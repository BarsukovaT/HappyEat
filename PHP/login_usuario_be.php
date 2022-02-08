<?php

    session_start();

    require "conexion_be.php";

    $email = $_POST['email_usuario'];
    $pass = $_POST['pass_usuario'];


    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email_usuario = '$email' and pass_usuario = '$pass'");

    if(mysqli_num_rows($validar_login)> 0){
        $_SESSION['usuario'] = $email;
        header("location: ../index.php");
        mysqli_close($conexion);
        exit();
    }

    else{
        echo '<script>
                alert("Usuario o contraseña incorrectos.");
                window.location = "../login.php";
            </script>';
        mysqli_close($conexion);
        exit();
    }


?>