<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function cliente()
    {
        return $this->hasMany(Pedido::class, 'pedidos_cliente_id','id');
    }
}
