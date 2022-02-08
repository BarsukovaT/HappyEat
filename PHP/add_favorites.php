<?php
require "conexion_be.php";


    // $query_2 = "SELECT * FROM recetas WHERE id_categoria = 2";
    // $query_3 = "SELECT * FROM recetas WHERE id_categoria = 3";

    // $query_pasta = mysqli_query($conexion, $query_1);
    // $query_ensalada = mysqli_query($conexion, $query_2);
    // $query_sopa = mysqli_query($conexion, $query_3);

    // mysqli_close($conexion);
    if(isset($_GET['id'])){
        // $usuario = $_SESSION['usuario'];
        //$usuario = 'tati@mail.ru';
        $id_plato = $_POST["id_plato"];
        $email_usuario = $_POST["email_usuario"];
        
        
        $query_1 = "INSERT INTO recetas_usuarios values ($usuario, $_GET[id])";
        $query_pasta = mysqli_query($conexion, $query_1);
        if($query_pasta){
            mysqli_close($conexion);
            $data = [ 'dhdhggh' => 'hdfd', 'age' => $_GET['id'] ];
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode($data); 
           
        }
    
        
       }
       
?>