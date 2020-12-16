<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoImagenes extends Model
{
    protected $fillable = [
        'producto_id', 'imagen'
    ];

    public function producto(){
        return $this->belongsTo('App\Models\Producto','id');
    }
    use HasFactory;
}
