@extends('layouts.app')

@section('content')
    <h1 class="my-4">Nuevo producto</h1>
    <div class="productos-nuevo">
        <form action="{{route('productos.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <br/>

            <label for="tipo">Tipo de producto</label>

            <select name="tipo" id="tipo">
                <option value="plancha">Plancha</option>
                <option value="cepillo">Cepillo</option>
                <option value="peine">peine</option>
                <option value="tratamientos">tratamientos</option>
                <option value="acondicionador">Acondicionador</option>
                <option value="secador">Secador</option>
            </select>

            <label for="nombre">Nombre </label>
            <input type="text" name="nombre" class="form form-control" required>

            <label for="descripcion">Descripcion </label>
            <input type="text" name="descripcion" class="form form-control" required>

            <label for="precio">Precio </label>
            <input type="number" name="precio" class="form form-control" required>

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



            <input type="submit" class="btn-crear" value="Crear">
            <br/>
            <br/>
        </form>
        <br/>
    </div>

@endsection
