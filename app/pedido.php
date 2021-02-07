<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\pedido;
use App\producto;
use App\Usuario;
use App\Factura;
class pedido extends Model
{
    //
    public function mesas() {
        return $this->belongsTomany('App\mesa', 'mesa_pedido', 'pedido_id', 'mesa_id');
    }

    public function productos() {
        return $this->belongsToMany(producto::class);
    }

      public function usuarios(){
        return $this->hasMany(Usuario::class);
 
    }
      public function factura(){
        return $this->belongsTo('App\Factura', 'factura_id', 'id');
    }
}