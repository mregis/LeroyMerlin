<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', 'Api\UserController@auth')->name('api.user.auth');

Route::prefix('/produtos')->group(function () {
    Route::get('/', 'Api\ProdutoController@listar')->name('api.produto.listar');
    Route::get('/{id}', 'Api\ProdutoController@encontrar')->name('api.produto.encontrar');

});
    Route::prefix('/categorias')->group(function () {
    Route::get('/', 'Api\CategoriaController@listar')->name('api.categoria.listar');
});

