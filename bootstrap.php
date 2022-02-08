<?php
$id_receta = $_GET["id_receta"];
$email_usuario = $_POST['email_usuario'];
//$id_usuario = ;
require "./PHP/conexion_be.php";
$receta = "SELECT * FROM recetas WHERE id_recetas = " . $id_receta;
$query_receta = mysqli_query($conexion, $receta);
$array_datos = mysqli_fetch_array($query_receta);
$tiempo= $array_datos["tiempo_receta"];
$img_adicional = $array_datos["img_adicional"];
$calorias= $array_datos["calorias_100gr"];
$titulo = $array_datos["nombre_recetas"];
$elaboracion = $array_datos["elaboracion"];
$tipo = "SELECT nombre_tipo FROM tipo where id_tipo = " . $array_datos["id_tipo"];
$query_tipo = mysqli_query($conexion, $tipo);
$array_tipo = mysqli_fetch_array($query_tipo);




//$tipo = "SELECT * FROM tipo inner join recetas on recetas.id_tipo = tipo.id_tipo WHERE id_recetas = " . $id_receta;
//$query_tipo = mysqli_query($conexion, $receta);
//$array_datos= mysqli_fetch_array($query_receta);
//$tipo = $array_datos["nombre_tipo"];

$img = $array_datos["img"];





?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="CSS/estilo.css">
<link rel="stylesheet" href="CSS/stilo.css">
<link rel="stylesheet" href="CSS/estilo_dish.css">
<link rel="stylesheet" href="CSS/font-awesome.css">
<link rel="stylesheet" href="CSS/font-awesome.min.css">
<link rel="stylesheet" href="FONTS/fontawesome-webfont.eot">
<link rel="stylesheet" href="FONTS/fontawesome-webfont.svg">
<link rel="stylesheet" href="FONTS/fontawesome-webfont.ttf">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title><?php echo $titulo;?></title>
</head>
<body>
<?php
        include ("cabecera.php");
        ?>
<!-- preview container -->

<div class="card"  style= "background-image: url('IMG/<?php echo $img; ?>'); width: 100%; height: 400px; padding: 30px; background-size: cover;">
  <div class="card-body">
        <h5 class="card-title"><?php echo $titulo;?></h5>
        <ul class="ul_style">
            <li style="width: 45%"><div class="button-on-image"><i class="fa fa-dashboard button-icon" aria-hidden="true"></i><div class="button-label"> <?php echo $calorias;?> kcal por 100 gr</div></div></li>
            <li style="width: 45%"><div class="button-on-image"><i class="fa fa-clock-o button-icon" aria-hidden="true"></i><div class="button-label"><?php echo $tiempo;?> minutos</div></div></li>
            <li style="width: 45%"><div class="button-on-image"><i class="fa fa-cutlery button-icon" aria-hidden="true"></i><div class="button-label"><a href=""><?php echo $array_tipo['nombre_tipo']; ?> </a></div></div></li>
            <li style="width: 45%"><div class="button-on-image"><i class="fa fa-book button-icon" aria-hidden="true"></i><div class="button-label"><a href="recetas_pastas.php"> Segundo plato</a></div></div</li>
        </ul>
  </div>
</div> 
<!--Ingredientes-->
<div class="ingredientes_personas">              
    <div class="ingredients-container flex"> <!--horizontal section-->
        <div class="ingredients-table" style="flex: 3; padding: 20px"><!--table section-->
            <div class="ingredients-summary flex"><!--persons quantity section-->
                <div class="flex">
                    <div class="ingredients-summary-header">
                            <h5>Cantidad de personas</h5>
                    </div>
                    <div class="wrapper">
                        <div class="minus">-</div>
                        <div class="num">1</div>
                        <div class="plus">+</div>
                    </div>       
                </div>
                <div class="flex">
                    <div class="ingredients-summary-header ingredients-summary-total-calories">Total Calorias
                    </div>
                    <div class="ingredients-summary-total-calories">
                        <div class="total-calories">
                            <!--inserted js-->
                        </div>
                    </div>
                </div>
            </div>
                <!--Table header -->
            <div class="ingredients-table-header flex">
                <div style="flex: 2">Ingredientes</div>
                <div style="flex: 1">Cantidad, gr</div>
                <div style="flex: 1">Calorias por 100 gr</div>
            </div>
            <!-- Table contents -->
            <div class="ingredients-table-body flex flex-column">
                 <?php
                    include ("tabla_ingr.php");
                ?>
            </div>     
        </div>
        <div style="flex: 4">
            <div style="display: flex; flex-direction: column;">
                <div class="stars">
                    <h5>Te gusta esta receta?</h5>
                    <div class="rate">
                        <!--<input type="radio" id="star5" name="rate" value="5" onclick=console.log("5"); />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" onclick=console.log("1"); />
                        <label for="star1" title="text">1 star</label>-->
                        <i class="fa fa-star fa-2x" data-index="0"></i>
                        <i class="fa fa-star fa-2x" data-index="1"></i>
                        <i class="fa fa-star fa-2x" data-index="2"></i>
                        <i class="fa fa-star fa-2x" data-index="3"></i>
                        <i class="fa fa-star fa-2x" data-index="4"></i>
                        <input type="hidden" name="id_receta" value="1">
                    </div>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                    <script src="stars_rating.js"></script>
                </div>
                <div class="favoritos">
                        <input type="submit" onclick=addFavourite(<?php echo $id_receta;?>, <?php echo $email_usuario;?>); name="button1" value="Añadir a favoritos"/>
                </div>
                <div class="receta_img_div" >
                    <img class="receta_img" style= "background-image: url('IMG/<?php echo $img; ?>'">

                </div>
                <div class="planificador">
                    <button class="planificador_button">Añadir a planificador</button>
                </div>
            </div>
        </div>    
    </div>    
        
  <!-- receipe description block -->
    <div style="display: flex;">
        <div style="flex: 1;">
            <div>
                <img class="additional_img" style="float:center; border:4px solid teal;" width="210" height="240" src="IMG/<?php echo $img_adicional; ?>" alt="arroz con pollo">
            </div>  
        </div>
        <div style="flex: 1;" class="elaboration">
        
            <h2>Elaboración</h2> 
            <?php echo $elaboracion;?>
            <!--<h5>El caldo de pollo</h5> 
            <ol>
                <li><p>Vamos a hacer el caldo de pollo como las madres, sin medidas exactas y al estilo con lo que tengamos. Que no tienes carcasas de pollo, pero sí un cuarto, ¡a la cazuela! Luego podrás hacer unas estupendas croquetas con lo que salga.
                </p></li>
                <li><p>
                Llena tu olla exprés con abundante agua fría. Pon un hueso de jamón, unas carcasas de pollo, la parte verde de un puerro, una patata, una zanahoria y una pizca de sal. Cuece a fuego medio con la olla abierta. Cuando veas que empieza a generar espuma con las impurezas —importantísimo—, retírala con un cucharón. Cuando ya no salga más espuma, cierra la olla, y mantén cociendo a fuego medio durante unos 15 minutos. </p>
                </p></li>
                <li><p>Aparta la olla del fuego. Espera a que baje la válvula de presión. Quita la tapa y deja cocer a fuego medio unos 5-10 minutos más. Cuélalo y listo para usar.
                </p></li>
            </ol>
            <h5>El arroz con pollo y verduras</h5>
            <ol>
                <li><p>Precalienta el horno a 200ºC, calor arriba y abajo.</p></li>
                <li><p>Pon la sartén mediana con el aceite de oliva virgen extra al fuego.</p></li>
                <li><p>Echa un poco de sal al pollo y al cerdo. Cuando el aceite esté caliente echa el pollo, fríelo y cuando esté listo, retíralo a un plato. Haz lo mismo con el cerdo.</p></li>
                <li><p>Trocea la cebolla y el ajo en dados muy pequeños.</p></li>
                <li><p>Pela el tomate y trocéalo también o rállalo, si lo prefieres.</p></li>
                <li><p>Sofríe el ajo y la cebolla en el mismo aceite de la carne. Cuando veas que están ya sofritos —la cebolla se pondrá transparente, ten cuidado de que no se queme—, añade el tomate.</p></li>
                <li><p>Trocea las judías verdes. Quita las hojas exteriores de las alcachofas, dejando el corazón, corta el tallo, pélalo y trocéalo —#AquíNoSeTiraNada—. Incorpora las verduras y remueve bien para que se sofría todo.</p></li>
                <li><p>Cuando pasen unos 2 o 3 minutos, incorpora la carne de cerdo y el pollo.</p></li>
                <li><p>Añade el caldo de pollo caliente. Rectifica de sal y pon a cocer.</p></li>
                <li><p>Cuando lleve unos 5 minutos en la sartén a fuego fuerte, añade el arroz. Sigue con el fuego fuerte durante 5 minutos. Baja el fuego y deja otros 5 minutos más. Total: 10 minutos en el fuego desde que echas el arroz.</p></li>
                <li><p>Pásalo al horno y déjalo 4 o 5 minutos más.</p></li>
                <li><p>Saca del horno y deja reposar unos 10 minutos antes de servir.</p></li>
            </ol>
-->


        </div>
    </div>
</div>
        <!--pie-->

<div id="pie"><?php include "footer.php" ?></div>

<script src="js/favoritos.js" ></script>
<script>
    function emitEvent(el, old, current) {
        let event = new CustomEvent('personasChange', {
            bubbles: true,
            detail: {
                old, current
            }
        });
        el.dispatchEvent(event);
    }
    const plus = document.querySelector(".plus"),
    minus = document.querySelector(".minus"),
    num = document.querySelector(".num");
    let a = 1;
    plus.addEventListener("click",()=>{
        if( a < 4 ){
            let old = a;
            a++;
            emitEvent(plus, old, a);
            num.innerText = a;
        }
    });
    minus.addEventListener("click",()=>{
        if(a > 1){
            let old = a;
            a--;
            emitEvent(minus, old, a);
            num.innerText = a;
        }
    });              
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    function assignTotalCalories() {
        let calorias = document.querySelectorAll('.ingredients-table-row');
        let totalCalorias = document.querySelector('.total-calories');
        let result = Array.from(calorias).map(e =>{
            let calorias_value = e.querySelector('.calorias');
            calorias_value = parseInt(calorias_value.innerText);
            let cantidad_value = e.querySelector('.cantidad');
            cantidad_value = parseInt(cantidad_value.innerText);
            return  (calorias_value/100) * cantidad_value;

        }).reduce((a,b) => a + b, 0);
        totalCalorias.innerText = result.toFixed(0);
    }
    assignTotalCalories();
</script>    
<script>
    function changedCb(evt) {
        let tableCells = document.querySelectorAll('.table-ingredients-cell.cantidad');
        let { old, current } = evt.detail;
        Array.from(tableCells).forEach(e => {
            let value = parseInt(e.innerText);
            let newValue = value / old * current;
            e.innerText = newValue;
        })
        assignTotalCalories();
    }

    
    document.querySelector('.ingredients-table').addEventListener('personasChange',changedCb);
</script>
</body>
</html>