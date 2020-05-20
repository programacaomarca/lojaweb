<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function categoria()
    {
        return $this->belongTo(Produto::class, 'categoria_id','id');
    }
}
