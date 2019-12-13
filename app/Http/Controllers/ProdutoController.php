<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProdutoResource;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Retorna uma listagem de todos os Produtos existentes - ONLY FOR TEST PURPOSE
     */
    public function listar()
    {
        return ProdutoResource::collection(Produto::al());
    }

    /**
     * Retorna um Produto para um produto_id informado - ONLY FOR TEST PURPOSE
     */
    public function encontrar($id)
    {
        return new ProdutoResource(Produto::find($id));
    }
}
