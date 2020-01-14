<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoriaResource;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Retorna uma listagem de todos os Categorias existentes - ONLY FOR TEST PURPOSE
     */
    public function listar()
    {
        return CategoriaResource::collection(Categoria::all());
    }

    /**
     * Retorna um Categoria para um Categoria_id informado - ONLY FOR TEST PURPOSE
     */
    public function encontrar($id)
    {
        return new CategoriaResource(Categoria::find($id));
    }
}
