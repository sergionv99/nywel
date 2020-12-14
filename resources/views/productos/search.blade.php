@extends('layouts.app')

@section('content')
    <h1 class="my-4">Nuevo producto</h1>
    <section class="index-productos">
        @foreach($productos as $producto)
            <article class="index-productos-miniaturas">
                <a class="colores-txt" href="{{route('productos.show', $producto->id)}}">
                    <img src="{{asset('storage/'.$producto->portada)}}">
                    <h1>{{$producto->nombre}}</h1>
                    @if(strpos($producto->precio,'.') !== false)
                        <p>{{(number_format($producto->precio, '2', ',', '.'))}}€</p>
                    @else
                        <p>{{($producto->precio)}}€</p>
                    @endif

                </a>
            </article>
        @endforeach
    </section>

@endsection
