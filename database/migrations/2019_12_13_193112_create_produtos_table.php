<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id')->comment("Identificador do registro na tabela");
            $table->string("nome", 100)->comment("Nome do produto");
            $table->boolean("entrega_gratuita")->default(false)->comment("Indica se o produto possui entrega gratuita.");
            $table->text("descricao")->comment("Descrição do produto e suas caracteristicas");
            $table->decimal("valor", 12, 2)->comment("Preço do produto");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
