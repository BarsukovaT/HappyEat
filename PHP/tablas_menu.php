<?php
require "consultas_menu.php";
?>


<table class="calculator">
    <thead>
        <tr>
            <th>DESAYUNO</th>
            <th>ALMUERZO</th>
            <th>CENA</th>
            <th>KCAL TOTALES</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td><?php echo $array_desayuno["nombre_receta"]?></td>
            <td><?php echo $array_almuerzo["nombre_receta"]?></td>
            <td><?php echo $array_cena["nombre_receta"]?></td>
            <td class="kcal" rowspan="3"><?php echo $array_desayuno["caloria_receta"] + $array_almuerzo["caloria_receta"] + $array_cena["caloria_receta"]?> Kcal</td>
        </tr>

        <tr>
            <td><?php echo $array_desayuno["caloria_receta"]?> Kcal</td>
            <td><?php echo $array_almuerzo["caloria_receta"]?> Kcal</td>
            <td><?php echo $array_cena["caloria_receta"]?> Kcal</td>
        </tr>

        <tr>
            <td><img src="img/<?php echo $array_desayuno["img_receta"]?>"></td>
            <td><img src="img/<?php echo $array_almuerzo["img_receta"]?>"></td>
            <td><img src="img/<?php echo $array_cena["img_receta"]?>"></td>
        </tr>
    </tbody>
</table>