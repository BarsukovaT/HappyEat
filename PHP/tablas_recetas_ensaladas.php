<?php
require "consulta_recetas.php";
?>


<table class="calculator table_recipes">
    <thead>
        <tr>
            <th>NOMBRE</th>
            <th>CALORIAS</th>
            <th>PREVIEW</th>
        </tr>
    </thead>

    <tbody>
        <?php
        while($row = mysqli_fetch_array($query_ensalada)) {
        ?>
        <tr>
            <td><?php echo $row["nombre_receta"]?></td>
            <td><?php echo $row["caloria_receta"]?></td>
            <td><img src='img/<?php echo $row["img_receta"]?>'></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>