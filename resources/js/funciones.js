$( document ).ready(function() {


    var SITE_URL = "{{URL::to('/')}}";

    var precio_original = $('.precio-cantidad').text();
    precio_original = precio_original.slice(0, -1);

    $(".input-value").keypress(function (e) {
        //if the letter is not digit then display error and don't type anything
        var total = parseInt($('.input-value').val());
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57) || total < 1) {
            return false;
        }


    });
    $(".input-value").keyup(function (e) {
        //if the letter is not digit then display error and don't type anything
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            return false;
        }
        var cantidad = $('.input-value').val();
        var total = precio_original * cantidad;
        // alert(cantidad);
        // alert(total);
        $('.precio-cantidad').text(total);
        $('.input-value').val(cantidad);

    });


    $('.boton-menos').click(function () {
        var cantidad = $('.input-value').val();
        cantidad --;

        var total = precio_original * cantidad;
        if(cantidad >= 1) {
            $('.precio-cantidad').text(total + '€');
            $('.input-value').val(cantidad);
        }
        else{
            return false;
        }

    })
    $('.boton-mas').click(function () {
        var cantidad = $('.input-value').val();
        cantidad ++;


        var total = precio_original * cantidad;
        $('.precio-cantidad').text(total + '€');
        $('.input-value').val(cantidad);

    })

    $('.carrito-boton').click(function () {
        $('.carrito-modal').show(500 );
        $('.modal-div').show(500);
        // $(".carrito-modal").load(location.href + ".carrito-modal");
        $(".carrito-modal").load(location.href+" .carrito-modal>*","");

    })
    $('.cerrar-modal').click(function () {
        // $(".carrito-modal").load(location.href+" .carrito-modal>*","");
        $('.carrito-modal').hide(500 );
        $('.modal-div').hide(500);

    })
});

