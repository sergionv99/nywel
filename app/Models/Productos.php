<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'precio', 'descripcion', 'stock', 'tipo', 'portada', 'estado', 'descuento', 'precio_descuento', 'created_at' , 'user_id' , 'referencia'
    ];

    public function user(){
        return $this->belongsTo('App\Model\User','id');
    }


}
