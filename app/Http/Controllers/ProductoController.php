<?php

namespace App\Http\Controllers;

use App\producto;
use Illuminate\Http\Request;
use App\Categoria;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = producto::all();
        return view('productos.index',['productos' =>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias = Categoria::all();
        return view('productos.created',['categorias'=>$categorias]);
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
        $producto=new producto();
        $producto->name=$request->name;
        $producto->precio=$request->precio;
        $producto->cantidad=$request->cantidad;
        $producto->foto=$request->foto;
        $producto->categoria_id=$request->categoria_id;
        $producto->save();
        return redirect()->action('ProductoController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categorias = Categoria::all();
        $producto = producto::find($id);
        return view('productos.edit',['producto' =>$producto, 'categorias'=>$categorias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $producto = producto::find($id);
        $producto->name=$request->name;
        $producto->precio=$request->precio;
        $producto->cantidad=$request->cantidad;
        $producto->foto=$request->foto;
        $producto->categoria_id=$request->categoria_id;
        $producto->save();
        return redirect()->action('ProductoController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
           $producto= producto::find($id);
           $producto->delete();
              return redirect()->action('ProductoController@index');
    }
}
