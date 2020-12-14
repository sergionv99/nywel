@extends('layouts.app_cart')

@section('content')
<h1>Mi cesta</h1>
@if(@isset($productos))
    <section class="index-carrito">
        <article>
            @foreach($productos as $producto )
                <div class="producto-carrito">
                <img src="{{asset('storage/'.$producto['producto']->portada)}}">
                <p>{{$producto['producto']->nombre}}</p>
                    @if(strpos($producto['producto']->precio,'.') !== false)
                        <p>{{(number_format($producto['producto']->precio, '2', ',', '.'))}}€</p>
                    @else
                        <p>{{($producto['producto']->precio)}}€</p>
                    @endif
                <div>

                    <button class="btn-cantidad btn-cantidad-menos">-</button>
                    <input class="input-value-carrito" type="text" value="{{$producto['cantidad']}}">
                    <button class="btn-cantidad btn-cantidad-mas ">+</button>
                </div>
                    @if(strpos($total,'.') !== false)
                        <p class="total-modal">{{(number_format($producto['total'], '2', ',', '.'))}}</p>
                    @else
                        <p class="total-modal">{{($producto['total'])}}</p>
                    @endif
                    <button class="btn-remove-cart" {{action('CarritoController@remove_cart')}}>Eliminar</button>
                <input class="data-product-carrito" value="{{$producto['producto']->id}}">

                </div>

            @endforeach


        </article>
        <article>
            @if(strpos($total,'.') !== false)
                <p class="total-modal">{{(number_format($total, '2', ',', '.'))}}</p>
            @else
                <p class="total-modal">{{($total)}}</p>
            @endif
        </article>
    </section>
    @else
    <section class="index-carrito">
        <article>
            <p>El carrito esta vacio</p>
        </article>
        <article>
            <p>Total 0€</p>
        </article>
    </section>
    @endif
<script>
    $(document).on('click', '.btn-remove-cart', function(){
        alert("funciona");
        // Cojo el valor del select

        var producto =  $(this).parent().find('.data-product-carrito').val();
        // var producto = $('.data-product-carrito').val();
        var token = '{{csrf_token()}}';

        alert(producto);

        // Se inicia la petición al archivo
        $.ajax({
            type: 'POST',
            method: 'POST',
            url: "{{route('ajax.remove')}}",
            data:{_token:token, producto:producto},
            // async: false,
            // cache: false,
            success: function () {
                $(".index-carrito").load(location.href+" .index-carrito>*","");
                $(".total-carrito").load(location.href+" .total-carrito>*","");
            },
            error: function () {
                alert("NO FUNCIONa carrito")
            }
        });

    });

    $(document).on('keyup', '.input-value', function(){
        alert("funciona");
        // Cojo el valor del select
        var cantidad = $(this).parents().find('.input-value').val();
        var producto = $(this).parents().find('.data-product-carrito').val();
        var token = '{{csrf_token()}}';
        if (cantidad < 1 || cantidad == null){
            cantidad = 1;
            $(this).parents().find('.input-value').val(1);
        }


        // Se inicia la petición al archivo
        $.ajax({
            type: 'POST',
            method: 'POST',
            url: "{{route('ajax.adjust')}}",
            data:{_token:token, cantidad:cantidad, producto:producto},
            success: function () {
                $(".total-carrito").load(location.href + " .total-carrito>*", "");

            },
            error: function () {

            }
        });
    });

    $(document).on('click', '.btn-cantidad-menos', function(){
        var cantidad = $(this).parent().find('.input-value-carrito').val();
        var producto = $(this).parent().parent().find('.data-product-carrito').val();
        var token = '{{csrf_token()}}';
        cantidad --;
        // var total = precio_original * cantidad;
        if(cantidad >= 1) {

            $.ajax({
                type: 'POST',
                method: 'POST',
                url: "{{route('ajax.adjust')}}",
                data: {_token: token, cantidad: cantidad, producto: producto},
                success: function () {
                    $(".carrito-modal").load(location.href + " .carrito-modal>*", "");
                    $(".total-carrito").load(location.href + " .total-carrito>*", "");
                },
                error: function () {
                    alert("NO FUNCION")
                }
            });
        }
        else{
            return false;
        }

    });
    {{--$(document).on('click', '.btn-cantidad', function(){--}}
    {{--    alert("funciona");--}}
    {{--    // Cojo el valor del select--}}
    {{--    var cantidad = $(this).parent().find('.input-value-carrito').val();--}}
    {{--    var producto = $(this).parent().parent().find('.data-product-carrito').val();--}}
    {{--    var token = '{{csrf_token()}}';--}}

    {{--    // Se inicia la petición al archivo--}}
    {{--    $.ajax({--}}
    {{--        type: 'POST',--}}
    {{--        method: 'POST',--}}
    {{--        url: "{{route('ajax.adjust')}}",--}}
    {{--        data:{_token:token, cantidad:cantidad, producto:producto},--}}
    {{--        success: function () {--}}
    {{--            alert("FUNCIONA SI")--}}
    {{--        },--}}
    {{--        error: function () {--}}
    {{--            alert("NO FUNCION")--}}
    {{--        }--}}
    {{--    });--}}
    {{--});--}}

    $(document).on('click', '.btn-cantidad-mas', function(){
        var cantidad = $(this).parent().find('.input-value-carrito').val();
        if(cantidad < 1) {
            $(this).parent().find('.input-value-carrito').val(1);
        }
        else {


            var producto = $(this).parent().parent().find('.data-product-carrito').val();
            var token = '{{csrf_token()}}';
            cantidad++;

            $.ajax({
                type: 'POST',
                method: 'POST',
                url: "{{route('ajax.adjust')}}",
                data: {_token: token, cantidad: cantidad, producto: producto},
                success: function () {
                    $(".index-carrito").load(location.href + " .index-carrito>*", "");
                },
                error: function () {
                    alert("NO FUNCION")
                }
            });
            // alert(cantidad)

            // var total = precio_original * cantidad;
            // $('.precio-cantidad').text(total + '€');
            $(this).parent().find('.input-value-carrito').val(cantidad);
        }

    });

    $(document).on('click', '.btn-cantidad-menos', function(){
        var cantidad = $(this).parent().find('.input-value-carrito').val();
        var producto = $(this).parent().parent().find('.data-product-carrito').val();
        var token = '{{csrf_token()}}';
        cantidad --;
        // var total = precio_original * cantidad;
        if(cantidad < 1 ) {
            $(this).parent().find('.input-value-carrito').val(1);
        }
        else{

            $.ajax({
                type: 'POST',
                method: 'POST',
                url: "{{route('ajax.adjust')}}",
                data: {_token: token, cantidad: cantidad, producto: producto},
                success: function () {
                    $(".index-carrito").load(location.href + " .index-carrito>*", "");
                },
                error: function () {
                    alert("NO FUNCION")
                }
            });
        }


    });




    {{--$(document).on('click', '.btn-cantidad-mas', function(){--}}
    {{--    var cantidad = $(this).parent().find('.input-value-carrito').val();--}}
    {{--    var producto = $(this).parent().parent().find('.data-product-carrito').val();--}}
    {{--    var token = '{{csrf_token()}}';--}}
    {{--    cantidad ++;--}}

    {{--    $.ajax({--}}
    {{--        type: 'POST',--}}
    {{--        method: 'POST',--}}
    {{--        url: "{{route('ajax.adjust')}}",--}}
    {{--        data:{_token:token, cantidad:cantidad, producto:producto},--}}
    {{--        success: function () {--}}
    {{--            $(".carrito-modal").load(location.href+" .carrito-modal>*","");--}}
    {{--        },--}}
    {{--        error: function () {--}}
    {{--            alert("NO FUNCION")--}}
    {{--        }--}}
    {{--    });--}}
    {{--    // alert(cantidad)--}}

    {{--    // var total = precio_original * cantidad;--}}
    {{--    // $('.precio-cantidad').text(total + '€');--}}

    {{--});--}}

    $(document).on('keyup', '.input-value-carrito', function(){
        // Cojo el valor del select
        var cantidad = $(this).parent().find('.input-value-carrito').val();
        var producto = $(this).parent().parent().find('.data-product-carrito').val();



        var token = '{{csrf_token()}}';
        if (cantidad < 1 || cantidad == null){
            cantidad = 1;
            $(this).parents().find('.input-value').val(1);
        }
        if (event.which != 8 && event.which != 0  && (event.which < 48 || event.which > 57)) {
            $(this).parent().find('.input-value-carrito').val(1);
            cantidad = 1;
        }


            // Se inicia la petición al archivo
            $.ajax({
                type: 'POST',
                method: 'POST',
                url: "{{route('ajax.adjust')}}",
                data: {_token: token, cantidad: cantidad, producto: producto},
                success: function () {
                    $(".index-carrito").load(location.href + " .index-carrito>*", "");

                },
                error: function () {
                    alert("NO FUNCION")
                }
            });

    });


</script>
@endsection