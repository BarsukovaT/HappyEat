<?php
    
    if(isset($_SESSION['usuario'])){
        echo '<script>
        document.getElementById("access").style.display = "none";
        document.getElementById("perfil").style.display = "block";
        
        var e1 = document.getElementById("recipe");
        var e2 = document.getElementById("plan");
        var e3 = document.getElementById("list");
       
        e1.classList.remove("disabled");
        e2.classList.remove("disabled");
        e3.classList.remove("disabled");
        </script>';
    }
    ?>