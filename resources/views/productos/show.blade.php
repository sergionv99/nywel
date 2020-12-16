@extends('layouts.app')

@section('content')

    <div class="container">
            <a href="{{route('productos.index')}}">Atras</a>
        <section class="show-productos">
            <div class="show-productos-img">
                <img src="{{asset('storage/'.$producto->portada)}}">
                @foreach($productosimgs as $imgs)
                    <img style="height: 100px; width: 100px;" src="{{asset('storage/'.$imgs->imagen)}}">
                     @endforeach
            </div>
{{--            @if($photospropertys)--}}
{{--                <div id="carouselExampleControls" class="carousel slide" data-interval="false" data-ride="carousel">--}}
{{--                    <div class="carousel-inner">--}}
{{--                        @php--}}
{{--                            $tam =0;--}}
{{--                        @endphp--}}

{{--                        @foreach($photospropertys as $photos)--}}
{{--                            --}}{{--                    <p>{{$tam}}</p>--}}

{{--                            <div class="carousel-item {{ $loop->first ? ' active' : '' }}">--}}
{{--                                <img id=" {{$tam = $tam + 1}}" src="{{asset('storage/'.$photos->photo)}}" style="width: 500px">--}}
{{--                                <p class="slider-n">{{$tam ?? ''}}/{{$total}}</p>--}}
{{--                                <p>  {{$photos->id}} </p>--}}
{{--                            </div>--}}

{{--                        @endforeach--}}



{{--                    </div>--}}

{{--                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">--}}
{{--                    <span class="carousel-control-prev-icon" >--}}

{{--<svg width="44" height="46" viewBox="0 0 44 46" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--<rect x="-0.500132" y="-0.499731" width="42.9882" height="44" transform="matrix(-1 0.000537106 -0.000263414 -1 42.9996 44.0008)" fill="#F0F0F0" stroke="black"/>--}}
{{--<path d="M1.6648 24.2593C1.11849 23.8546 1.12355 23.0362 1.6748 22.6422L18.8618 10.3599C19.5257 9.88543 20.4502 10.3667 20.4451 11.1841L20.2912 36.0866C20.2862 36.904 19.3558 37.3669 18.6979 36.8794L1.6648 24.2593Z" fill="black"/>--}}
{{--<rect x="17.1388" y="18.8234" width="25.5566" height="9.44506" rx="2" fill="black"/>--}}
{{--</svg>--}}

{{--</span>--}}
{{--                    </a>--}}
{{--                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">--}}
{{--                    <span class="carousel-control-next-icon" style="margin-right:25px">--}}


{{--<svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--<rect x="0.499944" y="0.49992" width="43.0241" height="43.9177" transform="matrix(1 -0.000159545 -0.000112027 1 0.0170238 0.0236546)" fill="#F0F0F0" stroke="black"/>--}}
{{--<path d="M42.376 20.74C42.9235 21.1449 42.9181 21.9649 42.3654 22.3586L25.1604 34.6115C24.4962 35.0845 23.5731 34.6028 23.5784 33.786L23.7418 8.93016C23.7472 8.11335 24.6766 7.65055 25.3344 8.13709L42.376 20.74Z" fill="black"/>--}}
{{--<rect x="26.8903" y="26.1624" width="25.5775" height="9.42779" rx="2" transform="rotate(-179.978 26.8903 26.1624)" fill="black"/>--}}
{{--</svg>--}}


{{--</span>--}}

{{--                    </a>--}}
{{--                    @endif--}}
{{--                </div>--}}

                <article>
                    <h1>{{$producto->nombre}}</h1>
                    @if(strpos($producto->precio,'.') !== false)
                        <h3>€ {{(number_format($producto->precio, '2', ',', '.'))}}</h3>
                    @else
                        <h3>€ {{($producto->precio)}}</h3>
                    @endif
                    <p>{{$producto->descripcion}}</p>
                    <article class="show-productos-cantidad">
                        <span>Cantidad:</span>
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
        <section>

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
@endsection