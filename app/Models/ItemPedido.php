<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['pedido_id','produto_id','quantidade','preco'])]
class ItemPedido extends Model
{
    use SoftDeletes;
}
