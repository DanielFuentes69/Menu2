<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\mesa;

class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mesas = mesa::all();
        return view('mesas.index',['mesas' =>$mesas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mesas.created');
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
        $mesa=new mesa();
        $mesa->nombre=$request->nombre;
        $mesa->save();
        return redirect()->action('MesaController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function show(mesa $mesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $mesa = mesa::find($id);
        return view('mesas.edit',['mesa' =>$mesa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $mesa = mesa::find($id);
        $mesa->nombre=$request->nombre;
        $mesa->save();
        return redirect()->action('MesaController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
           $mesa= mesa::find($id);
           $mesa->delete();
              return redirect()->action('MesaController@index');
    }
}
