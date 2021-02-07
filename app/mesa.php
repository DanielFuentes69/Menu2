<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mesa extends Model
{
    //

    public function pedidos() {
        return $this->belongsTomany('App\pedido', 'mesa_pedido', 'mesa_id', 'pedido_id');
    }
}
