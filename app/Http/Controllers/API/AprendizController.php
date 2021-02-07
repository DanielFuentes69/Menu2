<?php

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Aprendices;

class AprendizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $aprendiz = Aprendices::get(); 
         $result['result']='OK';
         $result['data']=$aprendiz;
        return response()->json($result);
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
        if (isset($request->nombre) && isset($request->documento) && isset($request->email) && isset($request->telefono)) {
         $aprendiz = new Aprendices();
        $aprendiz->nombre=$request->nombre;
        $aprendiz->documento=$request->documento;
        $aprendiz->email=$request->email;
        $aprendiz->telefono=$request->telefono;
        $aprendiz->save();
        $result['result']='OK';
        $result['data']=$aprendiz;
        return response()->json($result);   
        }else{
            $result['result']='Error';
            $result['data']='Datos Requeridos';
            return response()->json($result);
        }
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
        $aprendiz = Aprendices::find($id);
        if ($aprendiz) {
            $result['result']='OK';
            $result['data']=$aprendiz;
            return response()->json($result);
        }else{
            $result['result']='Error';
            $result['data']='ID No Valido';
            return response()->json($result);
        }
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
         $aprendiz = Aprendices::find($id);   
        if ($aprendiz) {
            $aprendiz->nombre=$request->nombre;
            $aprendiz->documento=$request->documento;
            $aprendiz->email=$request->email;
            $aprendiz->telefono=$request->telefono;
            $aprendiz->save();
            $result['result']='OK';
            $result['data']=$aprendiz;
            return response()->json($result);
        }else{
            $result['result']='Error';
            $result['data']='ID No Valido';
            return response()->json($result);
        }
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
        $aprendiz = Aprendices::find($id);   
        if ($aprendiz) {
            $aprendiz->delete();
            $result['result']='Aprendiz Eliminado Satisfactoriamente';
            $result['data']=$aprendiz;
            return response()->json($result);
        }else{
            $result['result']='Error';
            $result['data']='ID No Valido';
            return response()->json($result);
        }
    }
}
