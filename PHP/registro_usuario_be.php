<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];


    $query = "INSERT INTO usuarios(nombre_completo, email, usuario, pass) 
              VALUES('$nombre_completo', '$email', '$usuario', '$pass')";


    // Verificar que los campos claves no se repitan en la BASE DATA

    $verificar_email= mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email'");

    if(mysqli_num_rows($verificar_email) > 0){
        echo '<script>
                alert("Este correo ya esta registrado");
                window.location = "../login.php";
            </script>
        ';
        mysqli_close($conexion);
        exit();
    }

    $verificar_usuario= mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '<script>
                alert("Este usuario ya esta registrado");
                window.location = "../login.php";
            </script>
        ';
        mysqli_close($conexion);
        exit();
    }

    
// Guardar Datos en la BASE DATA

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo "Registro completado con exito <br> <a href= '../index.php'>Volver</a>";
    }
    else{
        echo "Error en el registro, intentelo nuevamente. <br> <a href= '../login.php'>Volver</a>";
    }

    mysqli_close($conexion);
?>