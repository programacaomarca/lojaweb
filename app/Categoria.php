<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function produtos()
    {
        return $this->hasMany(Categoria::class, 'categoria_id','id');
    }

}
