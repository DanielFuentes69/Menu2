<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
}); 

Route::middleware('auth')->resource('role', 'RoleController');
Route::middleware('auth')->resource('user', 'UserController');
Route::middleware('auth')->post('user/cambiarRole', 'UserController@cambiarRole');
Route::middleware('auth')->post('user/guardarRole', 'UserController@guardarRole');
//Route::middleware('auth')->get('addAprendiz/{curso_id}', 'CursoAprendizController@addAprendiz');

Route::middleware('auth')->get('nombre', function(){
	//echo var_dump(Auth::user()->roles()->get());
});

Route::resource('visita', 'visitascontroller');
Route::resource('productos', 'ProductoController');
Route::resource('factura', 'FacturaController');
Route::resource('producto', 'FacturaProductoController');
Route::resource('pedidos', 'PedidoController');
Route::resource('mesas', 'MesaController');
Route::resource('categoria', 'CategoriaController');
Route::resource('lista', 'ListaMenuController');
Route::resource('menu', 'MenuController');
Route::resource('usuario', 'UsuarioController');
Route::resource('cliente', 'ClienteController');
Route::resource('perfil', 'PerfilController');

Route::middleware('auth')->get('showProducto/{menu_id}','MenuController@showProducto')->name('menu.showProducto');
Route::middleware('auth')->get('addProductoM/{menu_id}','MenuController@addProductoM')->name('menu.addProductoM');
Route::middleware('auth')->post('saveProductoM','MenuController@saveProductoM');
Route::middleware('auth')->delete('deleteProductoM/{menu_id}/{producto_id}', 'MenuController@deleteProductoM')->name('menu.deleteProductoM');

Route::middleware('auth')->get('showProductoP/{pedido_id}','PedidoController@showProductoP')->name('pedidos.showProductoP');
Route::middleware('auth')->get('addProductoP/{pedido_id}','PedidoController@addProductoP')->name('pedidos.addProductoP');
Route::middleware('auth')->post('saveProductoP','PedidoController@saveProductoP');
Route::middleware('auth')->delete('deleteProductoP/{pedido_id}/{producto_id}', 'PedidoController@deleteProductoP')->name('pedidos.deleteProductoP');

Route::middleware('auth')->get('showPedido/{usuario_id}','UsuarioController@showPedido')->name('usuario.showPedido');
Route::middleware('auth')->get('addPedido/{usuario_id}','UsuarioController@addPedido')->name('usuario.addPedido');
Route::middleware('auth')->post('savePedido','UsuarioController@savePedido');
Route::middleware('auth')->delete('deletePedido/{usuario_id}/{pedido_id}', 'UsuarioController@deletePedido')->name('usuario.deletePedido');

Route::middleware('auth')->get('showFactura/{pedido_id}','PedidoController@showFactura')->name('pedidos.showFactura');
Route::middleware('auth')->get('addFactura/{pedido_id}','PedidoController@addFactura')->name('pedidos.addFactura');
Route::middleware('auth')->post('saveFactura','PedidoController@saveFactura');
Route::middleware('auth')->delete('deleteFactura/{pedido_id}/{factura_id}', 'PedidoController@deleteFactura')->name('pedidos.deleteFactura');


/*Route::any('saludo/{nombre}/{apellido}', function($nombre, $apellido) {
	echo "Hola $nombre $apellido <br>";
});

Route::get('sume/{n1}/{n2}', function($n1, $n2) {
	echo " La suma es ".($n1+$n2);
});

Route::get('producto/{n1}/{n2}', function($n1, $n2) {
	echo " La suma es ".($n1*$n2);
});*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
