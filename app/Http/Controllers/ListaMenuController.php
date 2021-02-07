<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Menu;
use App\Producto;

class ListaMenuController extends Controller
{
    public function index()
    {
        $id=1;
        //
        $menus=Menu::find($id);
        return view('lista.index',['menus' =>$menus]);
    }
}