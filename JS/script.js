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

//