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

// LOGIN //


function login() {

    var n = document.getElementById("user");
    var p = document.getElementById("pass");

    if (n.value == "admin" && p.value == "admin") {

        document.getElementById("rojo").style.display = "none";
        document.getElementById("access").style.display = "none";
        document.getElementById("perfil").style.display = "block";
        document.getElementById('user').disabled = "false";
        document.getElementById('pass').disabled = "false";
        document.getElementById('pass').disabled = "false";


    } else {
        document.getElementById("rojo").style.display = "block";
    }
}