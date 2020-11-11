@extends('layouts.app')

@section('content')
    <h1 class="my-4">Nuevo producto</h1>
    <section class="index-productos">
        @foreach($productos as $producto)
            <article class="index-productos-miniaturas">
                <a class="colores-txt" href="{{route('productos.show', $property->id)}}">
                <img src="{{asset('storage/'.$producto->portada)}}">
                <h1>{{$producto->nombre}}</h1>
                <p>{{$producto->precio}}</p>
            </article>
            @endforeach
    </section>

@endsection
