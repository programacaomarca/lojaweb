<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class endereco_entrega extends Model
{
    public function cliente()
    {
        return $this->belongTo(endereco_entrega::class, 'cliente_id','id');
    }
}
