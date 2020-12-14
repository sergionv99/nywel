@extends('layouts.app')

@section('content')
    <h1 class="my-4">Nuevo producto</h1>
    <div class="productos-nuevo">
        <form action="{{route('productos.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <br/>
<div class="formulario-crear">
            <div>
                <h3>Datos principales</h3>
            <label for="tipo">Tipo de producto</label>

            <select name="tipo" id="tipo">
                <option value="plancha">Plancha</option>
                <option value="cepillo">Cepillo</option>
                <option value="peine">peine</option>
                <option value="tratamientos">tratamientos</option>
                <option value="acondicionador">Acondicionador</option>
                <option value="champu">Champu</option>
                <option value="secador">Secador</option>
                <option value="secador">Tenacilla</option>
                <option value="Necesser">Necesser</option>
            </select>
<br>
            <label for="nombre">Nombre </label>
            <input type="text" name="nombre" class="form form-control" required>

            <label for="descripcion">Descripcion </label>
            <input type="text" name="descripcion" class="form form-control" required>

            <label for="precio">Precio </label>
            <input type="number" name="precio" class="form form-control" required step="any">

             <label for="stock">Stock </label>
            <input type="number" name="stock" class="form form-control" required>

<br>
            <label for="portada">Imagen</label>
            <input type="file" name="portada" required>

{{--            <label for="photo">Imagenes</label>--}}
{{--            <input type="file" name="photo[]" multiple>--}}

           <br>
            <label for="published">Publicar</label>
            <input type="checkbox" name="published" multiple>
            </div>

            <div>
                <h3>Caracteristicas</h3>
                <label for="marca">Marca </label>
                <input type="text" name="marca" class="form form-control">

                <label for="material">Material </label>
                <input type="text" name="material" class="form form-control">

                <label for="dimensiones">Dimensiones </label>
                <input type="text" name="dimensiones" class="form form-control">

                <label for="color">Color </label>
                <input type="text" name="color" class="form form-control">

                <label for="litros">Litros </label>
                <input type="number" name="litros" class="form form-control">

                <label for="mililitros">Mililitros </label>
                <input type="number" name="mililitros" class="form form-control">

                <label for="potencia">Potencia </label>
                <input type="number" name="potencia" class="form form-control">

                <label for="peso">Peso </label>
                <input type="number" name="peso" class="form form-control">

                <label for="tamanyo">Tamanyo</label>
                <input type="text" name="tamanyo" class="form form-control">

            </div>
</div>
            <input type="submit" class="btn-crear" value="Crear">
            <br/>
            <br/>
        </form>
        <br/>
    </div>

@endsection
