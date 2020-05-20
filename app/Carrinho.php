<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    public function pedido()
    {
        return $this->hasMany(Carrinho::class, 'carrinhos_pedidos_id','id');
    }

    public function produto()
    {
        return $this->hasMany(Carrinho::class, 'produto_id','id');
    }
}
