$( document ).ready(function() {


    var x =[];

    var SITE_URL = "{{URL::to('/')}}";

    var precio_original = $('.precio-cantidad').text();
    precio_original = precio_original.slice(0, -1);

    $(".input-value").keypress(function (e) {

        if (e.which != 8 && e.which != 0 &&(e.which < 48 || e.which > 57) ) {
            return false;
        }
        else{
            //if the letter is not digit then display error and don't type anything
            var total = parseInt($('.input-value').val());
            if (cantidad < 1 || cantidad == null){
                cantidad = 1;
           
                $(this).parents().find('.input-value').val(1);

            }
        }

    });
    $(".input-value").keyup(function (e) {
        //if the letter is not digit then display error and don't type anything
        var cantidad = $('.input-value').val();
        if (cantidad < 1 || cantidad == null){
            cantidad = 1;
            $(this).parents().find('.input-value').val(1);
        }
        var total = precio_original * cantidad;

        if(total % 1 != 0){
         total =  total.toFixed(2);
        }

        if (e.which != 8 && e.which != 0  && (e.which < 48 || e.which > 57)) {
            return false;
        }
        else{
            // alert(cantidad);
            // alert(total);
            $('.precio-cantidad').text(total);
            $('.input-value').val(cantidad);
        }


    });

    $('.boton-mas').click(function () {
        var cantidad = $('.input-value').val();
        cantidad ++;


        var total = precio_original * cantidad;

        if(total % 1 != 0){
            total =  total.toFixed(2);
        }

        $('.precio-cantidad').text(total + '€');
        $('.input-value').val(cantidad);

    })

    $('.boton-menos').click(function () {
        var cantidad = $('.input-value').val();
        cantidad --;

        var total = precio_original * cantidad;

        if(total % 1 != 0){
            total =  total.toFixed(2);
        }
        if(cantidad >= 1) {
            $('.precio-cantidad').text(total + '€');
            $('.input-value').val(cantidad);
        }
        else{
            return false;
        }

    });

    $( '.padre' ).on( "click", function() {
        $('.carrito-modal').hide(500 );
    });

    $( '.carrito-boton' ).on( "click", function() {
        $('.carrito-modal').show(500 );
        // $(".carrito-modal").load(location.href + ".carrito-modal");
        $(".carrito-modal").load(location.href+" .carrito-modal>*","");

    });


    $('.cerrar-modal').click(function () {
        // $(".carrito-modal").load(location.href+" .carrito-modal>*","");
        $('.carrito-modal').hide(500 );
        $('.modal-div').hide(500);

    })

    $('.cerrar-modal').click(function () {
        // $(".carrito-modal").load(location.href+" .carrito-modal>*","");
        $('.carrito-modal').hide(500 );
        $('.modal-div').hide(500);

    })

    $(document).on('mouseenter', '.miniatura-home', function () {
        $(this).find('.add-producto-miniatura').css('display', 'block');
    });

  $(document).on('mouseleave', '.miniatura-home', function () {
        $(this).find('.add-producto-miniatura').css('display', 'none');
    });


    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        //>=, not <=
        if (scroll >= 150) {
            // clearHeader, not clearheader - caps H
            $("#header-general").addClass("sticky");
            $(".logo").css("grid-column-start", 1);
            $(".header-top-elementos").css("grid-column-start", 3);
            $(".navegador").css("display", "none");
            $(".navegador-2").css("display", "block");
            $(".navegador-2").css("grid-column-start", 2);
        }
        else {
            $("#header-general").removeClass("sticky");
            $(".logo").css("grid-column-start", 2);
            $(".navegador").css("display", "block");
            $(".navegador-2").css("display", "none");
        }
    }); //missing );



    /* ------carrito-Modal----------------*/
    // $('.btn-cantidad-menos').click(function () {
    //     var cantidad = $(this).parent().find('.input-value-modal').val();
    //     cantidad --;
    //     // var total = precio_original * cantidad;
    //     if(cantidad < 1 ) {
    //         $(this).parent().find('.input-value-modal').val(1);
    //     }
    //     $(this).parent().find('.input-value-modal').val(cantidad);
    // })


    // var actual =0;
    $('.adelante').on('click', function () {
    var actual =    $(this).parent().parent().find('.miniatura-home-padre').find('article:visible').attr('id');
    var ultimo =    $(this).parent().parent().find('.miniatura-home-padre').find('article:visible:last').attr('id');
    actual = actual.split('-');
        ultimo = ultimo.split('-');
    actual = actual[1];
        ultimo = ultimo[1];

    // :first[style="display:block;"];
        // $('#carrusel-'+actual).hide();
        $(this).parent().parent().find('.miniatura-home-padre').find('#carrusel-'+actual).hide();
        ultimo++;
        if(ultimo > 10){
   ultimo = 1;
        }
        console.log(actual)
      var a =    $(this).parent().parent().find('.miniatura-home-padre').find('#carrusel-'+ultimo).show('slow');
        $(this).parent().parent().find('.miniatura-home-padre').append(a);

    });

    $('.atras').on('click', function () {

        var primero =    $(this).parent().parent().find('.miniatura-home-padre').find('article:visible').attr('id');
        var ultimo =    $(this).parent().parent().find('.miniatura-home-padre').find('article:visible:last').attr('id');
        primero = primero.split('-');
        ultimo = ultimo.split('-');
        primero = primero[1];
        ultimo = ultimo[1];

        console.log(primero)
        console.log(ultimo)

        // :first[style="display:block;"];
        // $('#carrusel-'+actual).hide();
        $(this).parent().parent().find('.miniatura-home-padre').find('#carrusel-'+ultimo).hide();
        if(primero == 1){
            primero = 10;
        }else{
            primero--;
        }


        var a = $(this).parent().parent().find('.miniatura-home-padre').find('#carrusel-'+primero).show('slow');
        // $(a).prependTo($(this).parent().parent().find('.miniatura-home-padre').show(500));
        $(this).parent().parent().find('.miniatura-home-padre').prepend(a);
        // a.show('slow');
    });


    $(".delete").on("submit", function(){
        return confirm("¿Estas segura de eliminar Laura?");
    });

    $(".imgs-minis").on('click', function () {

        var imgActual =  $(this).parent().parent().find('img:visible').attr('id');
        var imgActualAtributo =  $(this).parent().parent().find('img:visible').attr('data-img-producto');

        var miniatura =  $(this).attr('data-img-miniatura');


        if(miniatura != imgActualAtributo){
        $('#'+imgActual).hide();
        $('#im'+miniatura).fadeIn('slow');
        // $(this).parent().parent().find(imgActual).hide();
        }
    });


    $('.detalle-producto-primero').on('click', function () {

        $(this).addClass("activa");
        $(".detalle-producto-ultimo").removeClass("activa");
        $(".producto-caracteristicas").show();
        $(".producto-opiniones").hide();

    });
    $('.detalle-producto-ultimo').on('click', function () {

        $(this).addClass("activa");
        $(".detalle-producto-primero").removeClass("activa");
        $(".producto-caracteristicas").hide();
        $(".producto-opiniones").show();


    });
    $('.p-img').on('change', function () {
        alert("cambia");
        myFile = $('.p-img').prop('files');
        alert(myFile[0][0]);
        .Fil
    });

    });

