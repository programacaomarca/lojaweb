<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itens_venda extends Model
{
    public function venda()
    {
        return $this->hasMany(Itens_venda::class, 'venda_id','id');
    }

    public function produto()
    {
        return $this->hasMany(Produto::class, 'produto_id','id');
    }
}
