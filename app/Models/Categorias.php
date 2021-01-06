<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'posicion'
    ];

    public function product()
    {
        return $this->hasMany('App\Models\ProductoCategorias','categoria_id');
    }
}
