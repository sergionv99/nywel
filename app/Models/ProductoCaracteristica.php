<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoCaracteristica extends Model
{
    use HasFactory;

    protected $fillable = [
        'material', 'dimensiones', 'color', 'litros', 'mililitros', 'tamanyo', 'producto_id'
    ];

    public function producto(){
        return $this->belongsTo('App\Models\Producto','id');
    }
}
