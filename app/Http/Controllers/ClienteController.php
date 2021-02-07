<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = cliente::all();
        return view('cliente.index',['cliente' =>$cliente]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente = cliente::all();
        return view('cliente.add',['cliente'=>$cliente]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new cliente();
        $cliente->nombre=$request->nombre;
        $cliente->apellido=$request->nombre;
        $cliente->documento=$request->documento;
        $cliente->telefono=$request->telefono;
        $cliente->direccion=$request->direccion; 
        $cliente->email=$request->email;
        $cliente->save();
        return redirect()->route('cliente.index');
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
        $cliente = cliente::find($id);
        return view('cliente.edit',['cliente'=>$cliente]);
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
        $cliente = cliente::find($id);
        $cliente->nombre=$request->nombre;
        $cliente->apellido=$request->nombre;
        $cliente->documento=$request->documento;
        $cliente->telefono=$request->telefono;
        $cliente->direccion=$request->direccion; 
        $cliente->email=$request->email;
        $cliente->save();
        return redirect()->route('cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = cliente::find($id);
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}
