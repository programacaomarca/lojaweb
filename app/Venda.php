<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    public function clientes()
    {
        return $this->hasMany(Venda::class, 'cliente_id','id');
    }


}
