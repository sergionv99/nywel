<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\ProductoCaracteristica;
use App\Models\ProductoCategorias;
use App\Models\ProductoImagenes;
use App\Models\Categorias;
use App\Models\User;

class ProductosController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos= Productos::all();

//        $categorias = ProductoCategorias::find(3);
//        $categorias2 = ProductoCategorias::all();
        $categorias = Categorias::all()->sortBy('posicion');


//        $categoriasa = Categorias::find(2);

//        $categorias = $categoriasa->product;
//        $categorias =  $categorias2->product;
//        $categorias =  $categorias2;
$categorizado =[];
        foreach ($categorias as $categoria){
//            $categorizado[] = $categoria->nombre;
//            var_dump($categoria->nombre);
            foreach ($categoria->product as $cat){

                $categorizado[$categoria->nombre][] = $cat;
//                var_dump($cat->nombre);

            }

        }


        return view('productos.index',compact('productos', 'categorizado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = ProductoCategorias::all();

        return view('productos.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        //Publicado o ono
        if($request->published != null){
            $published = 0;

        }else{
            $published=1;
        }
        $facadeF=$request->file('portada');
        $facade=$facadeF->store('productos','public');


        $p = Productos::orderBy('id','desc')->first();

        $cod= substr($request->nombre,0, 2 );

        $id= $p['id']+1;
        $ref = $cod.$id;

        $id_user = 1;





        $producto = Productos::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'user_id'=>$id_user,
            'precio'=>$request->precio,
            'stock'=>$request->stock,
            'categoria'=>$request->tipo,
            'estado'=>$published,
            'portada'=>$facade,
            'referencia'=>$ref

        ]);

        $caracteristicas = ProductoCaracteristica::create([
            'material'=>$request->material,
            'dimensiones'=>$request->dimensiones,
            'producto_id'=>$producto->id,
            'tamanyo'=>$request->tamanyo,
            'litros'=>$request->litros,
            'color'=>$request->color,
            'mililitros'=>$request->mililitros,
            'marca'=>$request->marca,
            'potencia'=>$request->potencia,
        ]);

        $photos = $request->file('photo');

        if($photos) {
            foreach ($photos as $photo) {
                $path = $photo->store('productos', 'public');
                    ProductoImagenes::create([
                    'producto_id' => $producto->id,
                    'imagen' => $path
                ]);

            }
        }

        return redirect()->route('gestion.index')->with('success','Producto añadido');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $producto=Productos::find($id);

        $productosimgs = $producto->photos()->get('imagen');
        $productoscarac = $producto->caracteristicas()->get();
//        $photospropertys = $producto->photos()->get('photo');
//        if($photospropertys != null){
//            $total = count($photospropertys);
//        }
        $puta = ProductoCategorias::all();
        $categori = $producto->categorias->nombre;

        return view('productos.show',compact('producto', 'productosimgs', 'productoscarac', 'puta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Productos::find($id);

//        $categori = $producto->categoriaN->nombre;
//        $categori = $producto->photos->imagen;
        $categori = $producto->categorias->nombre;

        $categorias = ProductoCategorias::all();
        return view('productos.edit', compact('producto', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->published != null){
            $published = 0;

        }else{
            $published=1;
        }

        $producto = Productos::find($id);



        if($request->file('portada')){
            $facadeF=$request->file('portada');
            $facade=$facadeF->store('productos','public');
        }

        else{
            $facade=$producto['portada'];
        }

        $ref = $producto['referencia'];

        $id_user = 1;





        $producto->update([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'user_id'=>$id_user,
            'precio'=>$request->precio,
            'stock'=>$request->stock,
            'tipo'=>$request->tipo,
            'estado'=>$published,
            'portada'=>$facade,
            'referencia'=>$ref

//            'id_user'=>$request->id_user
        ]);

//        $photos = $request->file('photo');
//
//        if($photos) {
//            foreach ($photos as $photo) {
//                $path = $photo->store('photos', 'public');
//                Properties_photos::create([
//                    'propiedad_id' => $propiedad->id,
//                    'photo' => $path
//                ]);
//
//            }
//        }

        return redirect()->route('gestion.index')->with('success','Producto añadido');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Productos::find($id);
        $producto->delete();
        return redirect()->route('gestion.index');

    }

    public function busqueda(Request $request)
    {
        $busqueda =$request->search;

        if($busqueda){
            $productos = Productos::where("nombre", "LIKE", "%{$request->get('search')}%")
                ->orWhere("tipo", "LIKE", "%{$request->get('search')}%")
//                ->orWhere("referencia", "LIKE", "%{$request->get('search')}%")
                ->paginate(25);
                return view('productos.search',compact('productos','busqueda'));



        }
    }
    public function filtro_categoria(Request $request)
    {
        $id_cat = $request->id_categoria;
        $categoria = ProductoCategorias::find($id_cat);

        $productos = $categoria->product;

//            $productos = Productos::where("nombre", "LIKE", "%{$request->get('idpr')}%")
//                ->orWhere("tipo", "LIKE", "%{$request->get('idpr')}%")
////                ->orWhere("referencia", "LIKE", "%{$request->get('search')}%")
//                ->paginate(25);
////            $productos = "<article>";
            return response()->json($productos);
    }

}
