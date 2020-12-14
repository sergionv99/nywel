<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $clave = array_search($productos['id_producto'], $producto);
        $total = 0;

//        $productos = $_SESSION['producto_compra'];


        if (isset($_SESSION['producto_compra'])) {
            $productos = $_SESSION['producto_compra'];


            foreach ($productos as $producto => $p) {

                $precio = $p['producto']->precio;
                $preciof = $p['cantidad'] * $precio;
                $total = $total + $preciof;
            }
//       echo "<pre>";
//       var_dump($producto['cantidad']);
//
//       die;
            return view('carrito.show', compact('productos', 'total'));
        } else {
            return view('carrito.show', compact('total'));
        }
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('productos.show');
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function fill_cart(Request $request)
    {
        $cantidad = $request->input('cantidad');
        $id_producto = $request->input('producto');
        $producto = Productos::find($id_producto);
        $carrito = [];
        $precio = $cantidad * $producto->precio;
//        $produco = Productos::find($id_producto);
        $total = $cantidad * $producto->precio;
        if (isset($_SESSION['producto_compra'])) {
            $carrito = $_SESSION['producto_compra'];

            if($this->searchForId($id_producto, $carrito) != -1){
                $posicion_producto = $this->searchForId($id_producto, $carrito);
                $cantidad_original = $carrito[$posicion_producto]['cantidad'];
                $nueva_cantidad = $cantidad_original + $cantidad;

                $_SESSION['producto_compra'][$posicion_producto]['cantidad'] = $nueva_cantidad;
                $_SESSION['producto_compra'][$posicion_producto]['total'] = $total;

            }
            else{
                $elemento = count($carrito);
                $carrito = ["producto" => $producto, "cantidad" => $cantidad, "id_producto" => $id_producto, "total" => $total];
                $_SESSION['producto_compra'][$elemento] = $carrito;
            }



        }
        //Generar nuevo carrito
        else {
            $total = $cantidad * $producto->precio;
            $carrito = ["producto" => $producto, "cantidad" => $cantidad, "id_producto" => $id_producto, "total" => $total];
            $_SESSION['producto_compra'][] = $carrito;

        }


    }
    public function cantidad_cart(Request $request)
    {

        $cantidad = $request->input('cantidad');
        $id_producto = $request->input('producto');
        $carrito = $_SESSION['producto_compra'];
        $posicion_producto = $this->searchForId($id_producto, $carrito);
        $total = $cantidad * $_SESSION['producto_compra'][$posicion_producto]['producto']->precio;
                $_SESSION['producto_compra'][$posicion_producto]['cantidad'] = $cantidad;
                $_SESSION['producto_compra'][$posicion_producto]['total'] = $total;

    }

    public function remove_cart(Request $request)
    {


        $id_producto = $request->input('producto');
            $productos = $_SESSION['producto_compra'];
            $id = $this->searchForId($id_producto, $productos);

            unset($productos[$id]);
            $productos = array_values($productos);
            $_SESSION['producto_compra'] = $productos;
            $elemento = count($productos);

            if($elemento == 0){
                unset($_SESSION['producto_compra']);
            }


    }

    //Funcion para sacar la posicion del array multidimensional del producto a eliminar
    public function searchForId($id, $array)
    {
        foreach ($array as $key => $val) {
            if ($val['id_producto'] === $id) {
                return $key;
            }
        }
        return -1;
    }



}
