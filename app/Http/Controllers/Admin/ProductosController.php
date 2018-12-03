<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Producto;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('admin.viewProductos')->with('productos', $productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.newProductos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $success = 'Tu producto fue agregado';

        
        $producto = Producto::create([
            'producto_nombre' => $request->input('producto_nombre'),
            'producto_precio' => $request->input('producto_precio'),
            'producto_stock' => $request->input('producto_stock'),
            'producto_foto' => 'default',
        ]); 
        $tipoFoto = $request->producto_foto->getClientOriginalExtension();
        $fotoName = $producto->id.'_producto' . time() . '.' . $tipoFoto;
        $request->producto_foto->storeAs('public/productos', $fotoName);
        $producto->producto_foto = $fotoName;
        $producto->save();

        return redirect('/adm/productos');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        return view('Admin.producto')->with('producto', $producto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->producto_nombre = $request->input('producto_nombre');
        $producto->producto_stock = $request->input('producto_stock');
        $producto->producto_precio = $request->input('producto_precio');
        $producto->destacado = $request->input('destacado');

        if($request->has('producto_foto')) {
            $tipoFoto = $request->producto_foto->getClientOriginalExtension();
            $fotoName = $producto->id.'_producto' . time() . '.' . $tipoFoto;
            $request->producto_foto->storeAs('public/productos', $fotoName);
            $producto->producto_foto = $fotoName;
            $producto->save();
        }
        $producto->save();
        return redirect('/adm/productos/' . $producto->id);
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
        $producto = Producto::find($id);
        $producto -> delete();
        return redirect('/adm/productos');
    }
}
