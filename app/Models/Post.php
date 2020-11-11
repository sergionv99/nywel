<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'Titulo', 'Descripcion', 'Tematica', 'Imagen', 'user_id', 'created_at'
    ];

    public function user(){
        return $this->belongsTo('App\Model\User','id');
    }

}
