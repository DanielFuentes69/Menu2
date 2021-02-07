<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\producto;
use App\Categoria;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $menus = Menu::all();
        return view('menu.index',['menus' =>$menus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('menu.add');
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
        $menus=new Menu();
        $menus->nombre=$request->nombre;
        $menus->save();
        return redirect()->action('MenuController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function showProducto($menu_id)
    {
        //
        $menus=Menu::find($menu_id);
        return view('menu.showProducto', ['menu'=>$menus]);

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
        $menus= Menu::find($id);
        return view('menu.edit', ['menu'=>$menus]);
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
        $menus= Menu::find($id);
        $menus->nombre=$request->nombre;
        $menus->save();
        return redirect()->action('MenuController@index');
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
        $menus= Menu::find($id);
        $menus->delete();
        return redirect()->action('MenuController@index');
    }

    public function deleteProductoM($menu_id,$producto_id) {
        $menus = Menu::find($menu_id);
        $menus->productos()->detach($producto_id);
        return redirect()->route('menu.showProducto',['menu_id'=>$menu_id]);
    }

    public function addProductoM($menu_id) {
        $menus = Menu::find($menu_id);
        $ids = $menus->productos->pluck('id')->toArray();
        $productos = producto::whereNotIn('id', $ids)->get();
        return view('menu.lista_productom',
        ['menu_id'=>$menu_id, 'productos'=>$productos]);
    }

    public function saveProductoM(Request $request) {
        $menu_id=$request->menu_id;
        $menus = Menu::find($menu_id);
        if ($request->productos_id) {
            foreach($request->productos_id as $id) {
                $menus->productos()->attach($id);

            }
        }
        return redirect()->route('menu.showProducto',['menu_id'=>$menu_id]);
    }

}
