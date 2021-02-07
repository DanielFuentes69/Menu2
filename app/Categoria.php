<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\categoria;
class Categoria extends Model
{
    //

    public function productos() {
        return $this->hasMany('App\producto', 'categoria_id', 'id');
    }
}
