@extends('layouts.app')

@section('content')
    <div class="padre">
    <h1 class="my-4">Nuevo producto</h1>
        <section class="global-productos">
            <article>
                <ul class="listado-categorias">
                    <li><h3>Todas las categorias</h3></li>
                @foreach($categorizado as $key => $categorias)
                   <ul><li><h3>{{$key}}</h3></li>
                    @foreach($categorias as $categoria)
                       <li class="categoria" catego="{{$categoria->id}}">{{$categoria->nombre}}</li>
                       @endforeach
                   </ul>
                @endforeach
                </ul>
            </article>
            <article class="index-productos">

                @foreach($productos as $producto)
                    <article class="miniatura-home">
                        <a class="colores-txt" href="{{route('productos.show', $producto->id)}}">
                            <img src="{{asset('storage/'.$producto->portada)}}">
                            <p>{{$producto->nombre}}</p>
                            <p>{{$producto->precio}}€</p>
                        </a>
                        <input class="data-product" value="{{$producto->id}}">
                        <button class="add-producto-miniatura">AÑADIR A MI CESTA</button>
                    </article>
                @endforeach
            </article>
        </section>

    </div>
    <script>
        $(document).on('click', '.categoria', function(){

            // alert("hola")
            // alert("hola");
            var id_categoria = $(this).attr("catego");

            $(".categoria").removeClass('categoria-selecionada');
            $(this).addClass('categoria-selecionada');


            {{--                --}}{{--var token = '{{csrf_token()}}';--}}
            {{--        var idpr = $(this).val();--}}
            {{--        var token = '{{csrf_token()}}';--}}
            {{--        var content = "<div class='busquedas'> ";--}}
            $.ajax({  //create an ajax request to display.php
                type: "GET",
                method: "GET",
                url: "{{route('ajax.categorias')}}",
                data: ({id_categoria: id_categoria}),
                dataType: 'json',
                success: function (data) {

                    console.log(data);
                    if (data.length > 0 ) {
                        var content="";

                        jQuery.each(data, function (index, value) {
                            //     // jQuery.each(data, function(as, value2){
                            var imgurl = "/" + value.portada;
                            var img_final = '{{asset("storage")}}' + imgurl;

                            var tokensito = '{{csrf_token()}}';
                            var productos = "{{route('productos.show', ':id')}}";
                            var editar = "{{route('productos.edit', ':id')}}";

                            var destroy = "{{route('productos.destroy', ':id')}}";


                            productos = productos.replace(':id', value.id);

                            content += "<article class='miniatura-home'> <a href='" + productos + "'>" +
                                "                <img src='" + img_final + "'>" +
                                "                <p>" + value.nombre + "</p>" +
                                "                <p>" + value.precio + "€</p>" +
                                "                    </a>" +
                                "<input class='data-product' value='" + value.id + "'>" +
                                "<button class='add-producto-miniatura'>AÑADIR A MI CESTA</button>" +

                                "</article >";
                            // console.log(token);
                            //     // });
                        });

                        content += "</div>";
                        $(".index-productos").html(content);

                    } else {
                        content = "<p>Los resultados no coinciden </p>";
                        $(".index-productos").html(content);
                    }
                }
            });
        });

        $(document).on('click', '.add-producto-miniatura', function(){

            cantidad = 1;
            var producto = $(this).parent().find('.data-product').val();
            var token = '{{csrf_token()}}';
            alert(producto);


            $.ajax({
                type: 'POST',
                method: 'POST',
                url: "{{route('ajax.store')}}",
                data:{_token:token, cantidad:cantidad, producto:producto},
                success: function () {
                    alert("FUNCIONA SI")
                },
                error: function () {
                    alert("NO FUNCION")
                }
            });

        });

    </script>
@endsection

