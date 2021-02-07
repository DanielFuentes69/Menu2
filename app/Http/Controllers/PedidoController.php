<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\pedido;
use App\producto;
use App\Factura;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pedidos = pedido::all();
        return view('pedidos.index',['pedidos' =>$pedidos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //$productos = producto::all();
        $pedidos = pedido::all();
        return view('pedidos.created',['pedido'=>$pedidos]);
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
        $pedidos =new pedido();
        $pedidos->estado=$request->estado;
        $pedidos->subtotal=$request->subtotal=0;
        $pedidos->cantidad=$request->cantidad;
        $pedidos->fecha=$request->fecha;
        $pedidos->comentario=$request->comentario;
        //$pedidos->producto_id=$request->producto_id;
        /*echo var_dump($pedidos->comentario);
        return;*/
        $pedidos->save();
        return redirect()->action('PedidoController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function showProductoP($pedido_id)
    {
        //

        $pedidos=pedido::find($pedido_id);
        return view('pedidos.showProductoP', ['pedido'=>$pedidos]);
    }

     public function showFactura($id)
    {
        //
        $pedidos=pedido::find($id);
        return view('pedidos.showFactura', ['pedido'=>$pedidos]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $productos = producto::all();
        $pedidos = pedido::find($id);
        return view('pedidos.edit',['pedido' =>$pedidos, 'productos'=>$productos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pedidos = pedido::find($id);
        $pedidos->estado=$request->estado;
        $pedidos->subtotal=$request->subtotal;
        $pedidos->cantidad=$request->cantidad;
        $pedidos->fecha=$request->fecha;
        $pedidos->comentario=$request->comentario;
        //$pedidos->producto_id=$request->producto_id;
        $pedidos->save();
        return redirect()->action('PedidoController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
           $pedidos= pedido::find($id);
           $pedidos->delete();
              return redirect()->action('PedidoController@index');
    }
    public function deleteProductoP($pedido_id,$producto_id) {
        $pedidos = pedido::find($pedido_id);
        $pedidos->productos()->detach($producto_id);
        return redirect()->route('pedidos.showProductoP',['pedido_id'=>$pedido_id]);
    }

    public function addProductoP($pedido_id) {
        $pedidos = pedido::find($pedido_id);
        $ids = $pedidos->productos->pluck('id')->toArray();
        $productos = producto::whereNotIn('id', $ids)->get();
        return view('pedidos.lista_producto', 
        ['pedido_id'=>$pedido_id, 'productos'=>$productos]);
    }

    public function saveProductoP(Request $request) {
        $pedido_id=$request->pedido_id;
        $pedidos = pedido::find($pedido_id);
        if ($request->productos_id) {
            foreach($request->productos_id as $id) {
                $pedidos->productos()->attach($id);

            }
        }
        return redirect()->route('pedidos.showProductoP',['pedido_id'=>$pedido_id]);
    }

      public function deleteFactura($pedido_id ,$factura_id){
        $pedidos = pedido::find($pedido_id);
        $pedidos->factura_id =NULL;
        $pedidos->save();
        return redirect()->route('pedidos.showFactura',['pedido_id'=>$pedido_id]);
    }
    public function addFactura($pedido_id) {
        $pedidos = pedido::find($pedido_id);
        if ($pedidos->factura){
            $u = $pedidos->factura->id;
            $ids = array(0 => $u);
        } else{ 
            $ids=array();
        }
        $factura = Factura::whereNotIn('id', $ids)->get();
        return view('pedidos.lista_factura', 
        ['pedido_id'=>$pedido_id, 'facturas'=>$factura]);
    }

    public function saveFactura(Request $request) {
        $pedido_id=$request->pedido_id;
        $pedidos = pedido::find($pedido_id);
        if ($request->factura_id) {
               $pedidos->factura_id= $request->factura_id;
               /*  echo var_dump($pedidos->factura_id);
                return;*/
                $pedidos->save();
        }
        return redirect()->route('pedidos.showFactura',['pedido_id'=>$pedido_id]);
    }
}
