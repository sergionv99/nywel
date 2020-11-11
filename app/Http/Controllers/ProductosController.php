<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
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
        return view('productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
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

//
//        $p = Productos::orderBy('id','desc')->first();
//
//        $cod= substr($request->city,0, 2 );
//
//        $id= $p['id']+1;
//        $ref = $cod.$id;
//
            $id_user = 1;




        $propiedad = Productos::create([
            'nombre'=>$request->nombre,
            'descripcion'=>$request->nombre,
            'user_id'=>$id_user,
            'precio'=>$request->precio,
            'stock'=>$request->stock,
            'tipo'=>$request->tipo,
            'estado'=>$published,
            'portada'=>$facade

        ]);

        $photos = $request->file('photo');

        if($photos) {
            foreach ($photos as $photo) {
                $path = $photo->store('photos', 'public');
                Properties_photos::create([
                    'propiedad_id' => $propiedad->id,
                    'photo' => $path
                ]);

            }
        }

        return redirect()->route('productos.index')->with('success','Producto añadido');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
