
       <?php
       $conexion = mysqli_connect("localhost", "root", "", "happyeat");

       $recept= mysqli_query($conexion, "SELECT * FROM `recetas_ingredientes` INNER JOIN ingredientes on recetas_ingredientes.id_ingredientes=ingredientes.id_ingredientes WHERE id_receta =$id_receta;");
      
       if(mysqli_num_rows($recept) > 0){
          while ($row = mysqli_fetch_assoc($recept)){
            
            
            echo  "<div class='ingredients-table-row flex'>";
            echo "<div class='table-ingredients-cell-left'>";
           echo ($row['nombre_ingredientes']);
           echo "</div>";
          
           echo "<div class='table-ingredients-cell cantidad'>";
           echo ($row['cantidad']);
           echo "</div>";
           
           echo "<div class='table-ingredients-cell calorias'>";
           echo ($row['calorias_ingredientes']);
           echo "</div>";
           
           echo "</div>";
           }
           
           mysqli_close($conexion);
           
       }
 
        ?>

    


