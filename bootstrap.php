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

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Arroz con pollo y verduras</title>
</head>
<body>
<?php
        include ("cabecera.php");
        ?>
<!-- осноное окно -->
<div class="card"  style= "background-image: url('IMG/arroz_con_pollo.jpg'); width: 100%; height: 400px; padding: 30px; background-size: cover;">

  <!--<img class="card-img-top" src="IMG/arroz_con_pollo.jpg" alt="arroz_con_pollo">-->
  <div class="card-body">
    <h5 class="card-title">Arroz con pollo y verduras</h5>
   
    <ul style="list-style-type: none; display: flex; flex-wrap: wrap; width: 70%; margin: 0 auto">
    <li style="width: 45%"><div class="button-on-image"><i class="fa fa-dashboard button-icon" aria-hidden="true"></i><div class="button-label"> 366 kcal por 100 gr</div></div></li>
    <li style="width: 45%"><div class="button-on-image"><i class="fa fa-clock-o button-icon" aria-hidden="true"></i><div class="button-label">Entre 30 y 45 min</div></div></li>
    <li style="width: 45%"><div class="button-on-image"><i class="fa fa-cutlery button-icon" aria-hidden="true"></i><div class="button-label">Almuerzo</div></div></li>
    <li style="width: 45%"><div class="button-on-image"><i class="fa fa-book button-icon" aria-hidden="true"></i><div class="button-label">Segundo plato</div></div</li>
    </ul>
  </div>
</div> 
<!--Ingredientes-->
<div class="ingredientes_personas">
              
<div class="ingredients-container" style="display:flex">
<div style="flex: 1"></div>
<div class="ingredients-table" style="flex: 4; padding: 20px">
<div class="ingredients-summary flex">
    <div style="display: flex;flex: 2; flex-direction: column">
        <div class="ingredients-summary-header">
            Cantidad de personas
        </div>
        <div class="wrapper">
            <div class="minus">-</div>
            <div class="num">1</div>
            <div class="plus">+</div>
        </div>       
    </div>
    <div style="display: flex;flex: 1; flex-direction: column">
        <div class="ingredients-summary-header ingredients-summary-total-calories">Total Calorias</div>
        <div class="total-calories ingredients-summary-total-calories"></div>
    </div>
</div>
<div class="ingredients-table-header flex">
    <div style="flex: 2">Ingredientes</div>
    <div style="flex: 1">Cantidad, gr</div>
    <div style="flex: 1">Calorias por 100 gr</div>
</div>
<div class="ingredients-table-body flex flex-column">
  <?php
        include ("tabla_ingr.php");
        ?>
   </div>     
    <!--<tr>
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
  
      
    </tr>-->
    </div>
    <div style="flex: 2"></div>

    </div>
</div>
        <!--pie-->

<div id="pie"><?php include "footer.php" ?></div>


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