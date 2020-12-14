@extends('layouts.app')

@section('content')
    <div class="padre">
    <section class="home-images-front">
        <img src="{{asset('/storage/imgs/img-fondo.png')}}">
    </section>

    <section class="home-mas-vendidos">
        <div class="titulos">
        <div class="lineas"></div> <h1>MÁS VENDIDOS</h1><div class="lineas"></div>
        </div>
        <div class="miniatura-home-padre">
            @php
            $tam =0;
            @endphp
        @foreach($productos as $producto)
                <article id="carrusel-{{$tam = $tam + 1}}" class="miniatura-home">
                    <a class="colores-txt" href="{{route('productos.show', $producto->id)}}">
                        <img src="{{asset('storage/'.$producto->portada)}}">
                        <p>{{$producto->nombre}}</p>
                        <p>{{$producto->precio}}€</p>
                    </a>
                    <input class="data-product" value="{{$producto->id}}">
                    <button class="add-producto-miniatura">AÑADIR A MI CESTA</button>
                </article>
            @endforeach
        </div>
        <div>
            <button class="adelante">
                <svg width="57" height="100" viewBox="0 0 57 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.68 50L57 6.81818L50.16 0L0 50L50.16 100L57 93.1818L13.68 50Z" fill="#DCDBDC"/>
                </svg>
            </button>
            <button class="atras">
                <svg width="57" height="100" viewBox="0 0 57 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M43.32 50L0 6.81818L6.84 0L57 50L6.84 100L0 93.1818L43.32 50Z" fill="#DCDBDC"/>
                </svg>
            </button>

    </div>
    </section>

        <section class="home-mas-vendidos">
            <div class="titulos">
                <div class="lineas"></div> <h1>NOVEDADES</h1><div class="lineas"></div>
            </div>
            <div class="miniatura-home-padre">
                @php
                    $tam =0;
                @endphp
                @foreach($productosnuevos as $producto)
                    <article id="carrusel-{{$tam = $tam + 1}}" class="miniatura-home">
                        <a class="colores-txt" href="{{route('productos.show', $producto->id)}}">
                            <img src="{{asset('storage/'.$producto->portada)}}">
                            <p>{{$producto->nombre}}</p>
                            <p>{{$producto->precio}}€</p>
                        </a>
                        <input class="data-product" value="{{$producto->id}}">
                        <button class="add-producto-miniatura">AÑADIR A MI CESTA</button>
                    </article>
                @endforeach
            </div>
            <div>
                <button class="adelante">
                    <svg width="57" height="100" viewBox="0 0 57 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.68 50L57 6.81818L50.16 0L0 50L50.16 100L57 93.1818L13.68 50Z" fill="#DCDBDC"/>
                    </svg>
                </button>
                <button class="atras">
                    <svg width="57" height="100" viewBox="0 0 57 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M43.32 50L0 6.81818L6.84 0L57 50L6.84 100L0 93.1818L43.32 50Z" fill="#DCDBDC"/>
                    </svg>
                </button>

            </div>
        </section>

    <section class="home-post">
        <div class="titulos">
            <div class="lineas"></div> <h1>ÚLTIMOS POST</h1><div class="lineas"></div>
        </div>
        <div class="home-post-miniatura">
            <img src="{{asset('/storage/imgs/abrir-tu-salon-peluqueria.jpg')}}">
            <div class="post-descripcion">
                <p class="post-tematica">PEINADOS PASO A PASO</p>
                <h1>PEINADOS CON TRENZAS PARA OCASIONES DISTINTAS</h1>
                <p>20 NOV,2020</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et ex fermentum, auctor nisi sodales, ultrices lorem. Cras rhoncus turpis sed tempus volutpat. Donec facilisis, augue ut efficitur congue, tellus purus ornare libero, sit amet fermentum lectus lectus et eros. Donec vestibulum erat sit amet velit tincidunt finibus. In id arcu eget justo pharetra elementum. Praesent sed nibh et metus efficitur placerat. Donec pellentesque tincidunt nisl, vel rutrum sapien varius hendrerit. In justo lectus, gravida at sem nec, pellentesque faucibus lacus. Suspendisse non volutpat magna, sed elementum ipsum. Maecenas non pretium purus.

                    Donec feugiat fringilla ante, ac fermentum nulla. Suspendisse vitae volutpat libero. In sed turpis sed risus gravida congue id ut eros. Sed dictum condimentum iaculis. Suspendisse sit amet eros sed turpis vulputate laoreet non eu tortor. Praesent eget tortor ut metus blandit mattis vitae a ante. Vestibulum cursus euismod lacinia. Sed euismod tellus vitae ligula dictum vestibulum. Aliqu</p>
         <a href="#">Seguir leyendo...</a>
            </div>


        </div>
    </section>

    <section class="home-post">
        <div class="titulos">
            <div class="lineas"></div> <h1>NUESTROS CURSOS</h1><div class="lineas"></div>
        </div>
        <div class="miniatura-home-cursos">
            <div><p>BÁSICO</p></div>
            <div><p>AVANZADO</p></div>
        </div>
    </section>
    </div>

    <script>
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