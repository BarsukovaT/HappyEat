<!DOCTYPE html>
<html lang="en">



<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="FONTS/fontawesome-webfont.eot">
    <link rel="stylesheet" href="FONTS/fontawesome-webfont.svg">
    <link rel="stylesheet" href="FONTS/fontawesome-webfont.ttf">
    <link rel="stylesheet" href="CSS/estilo.css">
    <link rel="stylesheet" href="CSS/estilo_dish.css">
    <link rel="stylesheet" href="CSS/font-awesome.css">
    <link rel="stylesheet" href="CSS/font-awesome.min.css">
    <!--<link rel="stylesheet" href="http://localhost:8080/HappyEat/CSS/stilo.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--<link rel="stylesheet" href="CSS/stilo.css">-->
    <!--OTROS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!--PROPIOS-->
    <link rel="stylesheet" href="CSS/estilo.css">
    <script src="js/script.js"></script>

    <title>Plato</title>
</head>


<body>
    
        <!--CABECERA-->
        <?php
        include ("cabecera.php");
        ?>
       
       
         <!--IMAGEN-->
        <div class="block1">
            <div class="block_2">
                <div class="plato_informacion">Pollo con arroz </div>
                
                <div class="class_1">
                  <div class="class_2" style="display: flex; padding: 15px">
                  <div style="flex: 2">
                    <div class="imagen" style="background-image: url('IMG/arroz_con_pollo.jpg'); flex: 2;">
                      </div>
                    <div class="footer_imagen">

                        <div class="footer_imagen_element">
                            <i class="fa fa-clock-o fa-2x" aria-hidden="true"></i>
                            <p>35 min</p>
                        </div>


                        <div class="footer_imagen_element">
                            <i class="fa fa-line-chart fa-2x"></i>
                            <p>Facil</p>
                           
                        </div>

                        <div class="footer_imagen_element">
                            <i class=" ffa fa-firea-2x" aria-hidden="true"></i>
                            <p>350 kcal</p>
                           
                        </div>
                    </div>
                    </div>
                    <div style="flex: 3; background-color: pink"></div>
                    </div> 
                </div>

            </div>
             <!--INGREDIENTES-->

            <!--<div class="ingredientes">-->
            <div class="ingredientes_personas">
              <div class=" ingredientes" >Ingredientes</div>
            <select style="text-align: center" class="form-select" aria-label="Default select example">
  <option selected>Cantidad de personas</option>
  <option value="1">por 1 persona</option>
  <option value="2">por 2 personas</option>
  <option value="3">por 3 personas</option>
  <option value="3">por 4 personas</option>
</select>
            </div>
            <div class="ingredientes_lista">
            <!--<ul class="list_style">
                <li class="ingr_list_itm">
                    <span class="ingr_name">Salmon</span>
                    <span class="ingr_amount">"2"</span>                    
                </li>
                <li class="ingr_list_itm">
                <span class="ingr_name">Mayonesa</span>
                <span class="ingr_amount">"100 gr"</span>
                </li>
                <li class="ingr_list_itm">
                <span class="ingr_name">Limon</span>
                <span class="ingr_amount">"1"</span>
                </li>
                <li class="ingr_list_itm">
                <span class="ingr_name">Sal</span>
                <span class="ingr_amount">"5 gr"</span>
                </li>
               
            </ul>-->
            <table class="table table-success table-striped table-sm">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ingrediente</th>
      <th scope="col">Cantidad</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Pollo</td>
      <td>500 gr</td>

      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Mayonesa</td>
      <td>100 gr</td>
  
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td >Limón</td>
      <td >1</td>
    
    </tr>

    <tr>
      <th scope="row">4</th>
      <td >Sal</td>
      <td >5 gr.</td>
    
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Mayonesa</td>
      <td>100 gr</td>
  
      
    </tr> <tr>
      <th scope="row">6</th>
      <td>Mayonesa</td>
      <td>100 gr</td>
  
      
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Mayonesa</td>
      <td>100 gr</td>
  
      
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Mayonesa</td>
      <td>100 gr</td>
  
      
    </tr>
  </tbody>

  </table>
            </div>
            </div>
            
        </div>
        </div>
        <!--COMO PREPARAR-->
        <!--<div class="preparar">Preparar-->
        <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      Preparación del pollo guisado
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Limpiamos el pollo de restos de grasa y le retiramos la piel. En una olla expres calentamos un chorrito de aceite de oliva. Cuando el aceite esté caliente añadimos el pollo troceado y lo doramos por todos sus lados.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Paso #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Cuando el pollo esté casi dorado, añadimos la cebolla pelada y cortada en 4 partes, los dientes de ajo pelados y enteros y el tomillo. Dejamos que se cocine 2 o 3 minutos y añadimos la sal y el vino blanco. Cocinamos durante 5 minutos hasta que el alcohol del vino se haya evaporad.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Paso #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Tapamos la olla expres y cocinamos durante 20 minutos. Pasado este tiempo tendremos la carne de pollo tierna y con una abundante cantidad de salsa. Reservamos la carne y ponemos prácticamente toda la salsa en un cuenco.
      </div>
    </div>
  </div>
</div>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      Preparación del pollo guisado
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Limpiamos el pollo de restos de grasa y le retiramos la piel. En una olla expres calentamos un chorrito de aceite de oliva. Cuando el aceite esté caliente añadimos el pollo troceado y lo doramos por todos sus lados.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Paso #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Cuando el pollo esté casi dorado, añadimos la cebolla pelada y cortada en 4 partes, los dientes de ajo pelados y enteros y el tomillo. Dejamos que se cocine 2 o 3 minutos y añadimos la sal y el vino blanco. Cocinamos durante 5 minutos hasta que el alcohol del vino se haya evaporad.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Paso #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Tapamos la olla expres y cocinamos durante 20 minutos. Pasado este tiempo tendremos la carne de pollo tierna y con una abundante cantidad de salsa. Reservamos la carne y ponemos prácticamente toda la salsa en un cuenco.
      </div>
    </div>
  </div>
</div>
        </div>
        <!--PIE-->
        <div id="pie"><?php include "footer.php" ?></div>


    </div>
</body>

</html>