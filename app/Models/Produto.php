<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }
}
