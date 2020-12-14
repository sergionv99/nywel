<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productosnuevos = Productos::orderBy('id','desc')->take(10)->get();
        
        $productos = Productos::take(10)->get();

        return view('welcome',compact('productos', 'productosnuevos'));
    }
}
