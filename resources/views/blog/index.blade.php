@extends('layouts.app')

@section('content')

    <h1>Ultimos post</h1>

    <section class="index-posts-listado">
        @foreach($posts as $post)
            <article>{{$post->Titulo}}</article>
            <article>{{$post->Descripcion}}</article>
        @endforeach
    </section>
