<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\producto;
use App\Menu;
class Menu extends Model
{
    //

    public function productos() {
        return $this->belongsTomany('App\producto', 'menu_producto', 'menu_id', 'producto_id');
    }
}
