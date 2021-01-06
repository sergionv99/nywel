<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoCategorias extends Model
{

    use HasFactory;

    protected $fillable = [
        'nombre'
    ];

    public function product()
    {
        return $this->hasMany('App\Models\Productos','categoria_id');
    }

    public function categoriasPadre()
    {
        return $this->belongsTo('App\Models\Categorias','categoria_id');
    }



}
