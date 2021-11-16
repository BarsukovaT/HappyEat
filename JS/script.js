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
    var e1 = document.getElementById("recipe");
    var e2 = document.getElementById("plan");
    var e3 = document.getElementById("list");

    if (n.value == "admin" && p.value == "admin") {

        location.href = "file:///C:/xampp/htdocs/HappyEat/index.html";
        document.getElementById("access").style.display = "none";
        document.getElementById("perfil").style.display = "block";
        e1.classList.remove("disabled");
        e2.classList.remove("disabled");
        e3.classList.remove("disabled");

    } else {
        document.getElementById("rojo").style.visibility = "visible";
    }
}