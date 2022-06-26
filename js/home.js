$(function () {
    $('ul li').click(function () {
        $('li').removeClass("active");
        $(this).addClass("active");
    });

    $('ol li button').click(function () {
        $('button').removeClass("active");
        $(this).addClass("active");
    });

});



$(function() {
    $('.btnSeleccion').click(function(e) {
        e.preventDefault();
        
       /* var idSeleccion = $(this).attr("id");
        console.log(idSeleccion)*/

        var ValorSeleccion = $(this).attr("data-id");
        console.log(ValorSeleccion);

        $('.recipes').html('<center><img src="img/cargando.gif" style="left:50%; right: 50%; margin-top: 25%; width:80px;"/></center>');
 
        /*
        Otra forma de hacerlo si no deseas Usar AJAX
        $.post('comidas.php', {'comida': ValorSeleccion }, function(data) {
            $(".recipes").html(data);
        });*/

       $.ajax({
            url: 'comidas.php',
            data: {'comida': ValorSeleccion},
            type: 'POST',
            success: function(miData) {
                console.log(miData);
                $(".recipes").html(miData);
            },
            error: function(error) {
                console.log(error);
            }
        }); 
    });
});
