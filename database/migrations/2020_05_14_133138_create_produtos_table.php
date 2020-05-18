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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('categoria_id');           
            $table->string('titulo_produto');
            $table->double('preco', 6,2)->default(0);
            $table->string('autor')->nullable($value = true);
            $table->string('duracao', 20);
            $table->text('desricao');
            $table->text('conteudo');
            $table->string('slug_produto');
            $table->enum('ativo_produto', ['S','N'])->default('S');
            $table->string('imagem_produto');
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias');
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
