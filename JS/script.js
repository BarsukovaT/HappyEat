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

// SOLICITUD GENERAR MENU //


function GenerarMenu() {
    location.reload();
}