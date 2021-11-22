// FUNCION DESPLAZAMIENTO MENU //

posicionarMenu();

$(window).scroll(function() {
    posicionarMenu();
});

function posicionarMenu() {
    var altura_del_header = $('.header').outerHeight(true);
    var altura_del_menu = $('.navi').outerHeight(true);

    if ($(window).scrollTop() >= altura_del_header) {
        $('.navi').addClass('fixed');
        $('.contenido').css('margin-top', (altura_del_menu) + 'px');
    } else {
        $('.navi').removeClass('fixed');
        $('.contenido').css('margin-top', '0');
    }
}


// REGISTER Y LOGIN //

function register() {
    document.querySelector(".formulario_register").style.display = "block";
    document.querySelector(".contenedor_login-register").style.left = "410px";
    document.querySelector(".forumlario_login").style.display = "none";
    document.querySelector(".caja_trasera_register").style.opacity = "0";
    document.querySelector(".caja_trasera_login").style.opacity = "1";

}

function login() {
    document.querySelector(".formulario_register").style.display = "none";
    document.querySelector(".contenedor_login-register").style.left = "10px";
    document.querySelector(".forumlario_login").style.display = "block";
    document.querySelector(".caja_trasera_register").style.opacity = "1";
    document.querySelector(".caja_trasera_login").style.opacity = "0";

}

// VALIDAR FORMULARIO REGISTRO

function validarFormulario() {
    var name = document.getElementById('n_completo').value;
    var correo = document.getElementById('correo').value;
    var user = document.getElementById('user').value;
    var con = document.getElementById('con').value;

    if (name.length == 0 || correo.length == 0 || user.length == 0 || con.length == 0) {
        alert('Por favor, rellene todos los campos del registro.');
        return;

    }

}