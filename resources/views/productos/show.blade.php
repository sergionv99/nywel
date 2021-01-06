@extends('layouts.app')

@section('content')

    <div class="container zona-producto">
            <a href="{{route('productos.index')}}">Atras</a>
        <section class="show-productos">
            <div class="show-productos-img">
                @php
                    $imgpr =0;
                    $pratributo =0;
                    $miniatura = 0;
                @endphp
                <div>
{{--                    @foreach($puta as $tu)--}}
{{--                   <p>Aqui {{$tu->nombre}} </p>--}}
{{--                    @endforeach--}}
                <img id="im{{$imgpr}}" data-img-producto="{{$pratributo}}" src="{{asset('storage/'.$producto->portada)}}">
                    @foreach($productosimgs as $imgs)
                        <img id="im{{$imgpr = $imgpr + 1}}" data-img-producto="{{$pratributo = $pratributo + 1}}" style="display: none" src="{{asset('storage/'.$imgs->imagen)}}">
                    @endforeach
                </div>
                <div class="producto-imgs-miniatura">
                    <img class="imgs-minis"  data-img-miniatura="{{$miniatura}}" style="height:100px; width: 100px;" src="{{asset('storage/'.$producto->portada)}}">
                @foreach($productosimgs as $imgs)
                    <img class="imgs-minis"  data-img-miniatura="{{$miniatura = $miniatura + 1}}" style="height: 100px; width: 100px;" src="{{asset('storage/'.$imgs->imagen)}}">
                     @endforeach
                </div>
            </div>

                <article>
                    <h1>{{$producto->nombre}}</h1>
                    @if(strpos($producto->precio,'.') !== false)
                        <h3>€ {{(number_format($producto->precio, '2', ',', '.'))}}</h3>
                    @else
                        <h3>€ {{($producto->precio)}}</h3>
                    @endif
                    <p>{{$producto->descripcion}}</p>
                    <article class="show-productos-cantidad">
                        <span>CANTIDAD:</span>
                        <br>
                        <button class="boton-menos">-</button>
                        <input class="input-value" type="text" value="1">
                        <button class="boton-mas">+</button>
                        <span class="precio-cantidad">{{$producto->precio}}€</span>

                        <br>
                        <button class="btn-add-cart" {{action('CarritoController@fill_cart')}}>AÑADIR A MI CESTA</button>
                        <input class="data-product" value="{{$producto->id}}">

                    </article>
                </article>
        </section>
        </section>
        <script>
            $('.btn-add-cart').click(function () {
                alert("funciona");
                // Cojo el valor del select
                var cantidad = $('.input-value').val();
                var producto = $('.data-product').val();
                var token = '{{csrf_token()}}';

                if (cantidad < 1 || cantidad == null){
                    cantidad = 1;
                    $(this).parents().find('.input-value').val(1);
                }

                // Se inicia la petición al archivo
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
    </div>
    <section class="container">
        <article>
           <span class="detalle-producto activa detalle-producto-primero">DETALLES DEL PRODUCTO</span><span class="detalle-producto detalle-producto-ultimo">OPINIONES
                <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10.9755 1.08156L12.6064 6.10081C12.8072 6.71885 13.3831 7.13729 14.033 7.13729H19.3105C19.7949 7.13729 19.9963 7.75709 19.6044 8.0418L15.3348 11.1439C14.8091 11.5258 14.5891 12.2029 14.7899 12.8209L16.4207 17.8402C16.5704 18.3008 16.0432 18.6839 15.6513 18.3992L11.3817 15.2971C10.8559 14.9151 10.1441 14.9152 9.61832 15.2971L5.34869 18.3992C4.95683 18.6839 4.42959 18.3008 4.57927 17.8402L6.21012 12.8209C6.41093 12.2029 6.19095 11.5258 5.66522 11.1439L1.39558 8.04179C1.00373 7.7571 1.20511 7.13729 1.68948 7.13729H6.96703C7.61687 7.13729 8.19281 6.71885 8.39362 6.10081L10.0245 1.08156C10.1741 0.620905 10.8259 0.620902 10.9755 1.08156Z" fill="#FDDE77" stroke="black"/>
</svg>
</span>
            <div class="producto-caracteristicas">
                <p>{{$producto->categorias->nombre}}</p>
            @foreach($productoscarac as $caracteristica)
                <p><span class="titulo-caracteristicas">Marca: </span>{{$caracteristica->marca}}</p>
                <p><span class="titulo-caracteristicas">Color: </span>{{$caracteristica->color}}</p>
                <p><span class="titulo-caracteristicas">Dimensiones: </span>{{$caracteristica->Dimensiones}}</p>
                <p><span class="titulo-caracteristicas">Peso: </span>{{$caracteristica->peso}}</p>
                @endforeach
            <p><span class="titulo-caracteristicas">Acerca de: </span>{{$producto->descripcion}}</p>
            </div>

            <div class="producto-opiniones">

            </div>
        </article>
    </section>
@endsection