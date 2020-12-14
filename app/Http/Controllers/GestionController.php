<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class GestionController extends Controller
{
    public function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
       $productos = Productos::all();

       return view('management.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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


    public function search_gestion(Request $request)
    {
//        $cantidad = $request->input('idpr');
//
//        $blog = Productos::find($cantidad);
        $busqueda =$request->idpr;

        if($busqueda){
            $productos = Productos::where("nombre", "LIKE", "%{$request->get('idpr')}%")
                ->orWhere("tipo", "LIKE", "%{$request->get('idpr')}%")
//                ->orWhere("referencia", "LIKE", "%{$request->get('search')}%")
                ->paginate(25);
//            $productos = "<article>";
        return response()->json($productos);
    }
        else{
            $productos = Productos::all();
            return response()->json($productos);
        }
    }

}
