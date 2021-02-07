<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Menu;
use App\producto;
use App\pedido;
class producto extends Model
{
    //
    public function menus() {
        return $this->belongsTomany('App\Menu', 'menu_producto', 'producto_id', 'menu_id');
    }

    public function categoria() {
        return $this->belongsTo('App\Categoria', 'categoria_id', 'id');
    }
     public function Facturas() {
        return $this->belongsTomany('App\Factura','facturas_has_productos','producto_id','factura_id');
    }
    public function Pedidos() {
        return $this->belongsToMany(pedido::class);
    }
}
