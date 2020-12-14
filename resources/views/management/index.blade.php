@extends('layouts.app_gestion')

@section('content')
<div class="col-lg-12">
    <h1 class="my-4">Productos</h1>
    <a class="btn btn-primary" style="margin-bottom: 5px" href="{{route('productos.create')}}">Nuevo producto</a>
    <br>
    <input type="text">
    <button class="ajax-test">pulsar</button>
    <div class="test">aa</div>
    <table class="table">
        <thead>
        <tr>
            <th>Referencia</th>
            <th>Nombre</th>
            <th>Imagen</th>
            <th>Stock</th>
            <th>Precio</th>
            <th>Tipo</th>
            <th>Estado</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            <tr>

                <td>{{$producto->referencia}}</td>
                <td>{{$producto->nombre}}</td>
                <td><img style="width: 100px; height: 70px" src="{{asset('storage/'.$producto->portada)}}"></td>
                <td>{{$producto->stock}}</td>
                <td>{{$producto->precio}}€</td>
                <td>{{$producto->tipo}}</td>
                <td>@if($producto->estado == 0)
                        Publicado
                    @else
                        No publicado
                    @endif</td>
                <td><a class="btn btn-primary" href="{{route('productos.edit',$producto->id)}}">Edit</a>

                </td>
                <td>
                    <a class="btn btn-primary" href="{{route('productos.show',$producto->id)}}">Ver</a>

                </td>

                <td><form class="delete" action="{{route('productos.destroy', $producto->id)}}"method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script>
        $(".ajax-test").click(function() {

            {{--var token = '{{csrf_token()}}';--}}
            var idpr = "test";
            var token = '{{csrf_token()}}';

            $.ajax({  //create an ajax request to display.php
                type: "GET",
                method: 'GET',
                url: "{{route('ajax.search')}}",
                data:({idpr:idpr}),
                dataType: 'json',
                success: function (data) {
                    // var content = "<td>"
var content = "";
                    // console.log(data);
                    // var ed=$.parseJSON(data);
                    // console.log(data.data[0].nom bre);
                    jQuery.each(data.data, function(index, value){
                    //     // jQuery.each(data, function(as, value2){
                        var imgurl = "/"+value.portada;
                        var img_final = '{{asset("storage")}}' + imgurl;

                        var tokensito = '{{csrf_token()}}';
                        $id_producto =  value.id;
                        var productos = "{{route('productos.show', ':id')}}";
                        var editar = "{{route('productos.edit', ':id')}}";
                        var destroy = "{{route('productos.destroy', ':id')}}";

                        productos = productos.replace(':id', value.id);
                        editar = editar.replace(':id', value.id);
                        destroy = destroy.replace(':id', value.id);

                        {{--var csrf = "@csrf";--}}

                        {{--var img ="{{asset("storage/"+value.portada+")}}";--}}
                   content +="<tr>"+
                        {{--"                <td>{{$producto->nombre}}</td>\n" +--}}
                        {{--"                <td><img src=\"{{asset('storage/')}}\""+imgurl+"></td>\n";--}}
                        "                <td>"+value.referencia+"</td>" +
                        "                <td>"+value.nombre+"</td>" +
                        "                <td><img style=\"width: 100px; height: 70px\" src="+img_final+"></td>\n" +
                        "                <td>"+value.stock+"</td>" +
                        "                <td>"+value.precio+"</td>" +
                        "                <td>"+value.tipo+"</td>" +
                        "                <td>"+value.estado+"</td>" +
                        {{--"                <td>{{$producto->precio}}€</td>\n" +--}}
                        {{--"                <td>{{$producto->tipo}}</td>\n" +--}}
                        {{--"                <td>@if($producto->estado == 0)\n" +--}}
                        {{--"                        Publicado\n" +--}}
                        {{--"                    @else\n" +--}}
                        {{--"                        No publicado\n" +--}}
                        {{--"                    @endif</td>\n" +--}}
                        "                <td><a class=\"btn btn-primary\" href='"+editar+"'>Edit</a></td>" +
                        {{--"\n" +--}}
                        {{--"                </td>\n" +--}}
                        {{--"                <td>\n" +--}}
                        "                   <td> <a class=\"btn btn-primary\" href='"+productos+"'>Ver</a></td>" +
                        {{--"\n" +--}}
                        {{--"                </td>\n" +--}}
                        {{--"\n" +--}}
                        "                <td><form class='delete' action ='"+destroy+"'>" +
{{--                                           {{ method_field('DELETE') }}--}}
{{--                                            {{ csrf_field() }}--}}
                        "    <input type='hidden' name='_token' value='"+tokensito+"'>"+
                        "    <input type='hidden' name='_method' value='DELETE'>"+
                        "                        <button class='btn btn-danger' type='submit'>Eliminar</button>" +
                        "                    </form></td>" +
                        "                    </tr>";

                        $("tbody").html(content);
                        console.log(token);
                    //     // });
                    });

                    // $.each(data, function(index, obj){
                    //     // console.log(obj);
                    //     var tr = $("<p></p>");
                    //
                    //     tr.append("<p>"+ obj[2]+"</p>");
                    //     $(".test").append(tr);
                    // });
                    // $(".test").html(data.nombre);
                    // $("#description").html(data.description);
                }
            });
        });

</script>



 @endsection
