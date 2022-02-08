function addFavourite(id_plato, email_usuario) {

    $.ajax({
        url: "add_favorite.php",
        method: "POST",
        dataType: 'json',
        data: {
            id_plato: id_plato,
            email_usuario: email_usuario
        }, success: function(r){
            //uID = r.uid;
        }

    });



    let params = new URLSearchParams(window.location.search);
    fetch("/HappyEat/php/add_favorites.php?id="+params.get('id'))
    .then((response) => {
        return response.text()
    })
    .then((txt) => console.log(txt)) 
}