<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItensVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens_vendas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('venda_id'); 
            $table->unsignedBigInteger('produto_id'); 
            $table->double('valor_item', 10,2);
            $table->double('qtde', 6,2);
            $table->double('subtotal', 10,2);
            $table->timestamps();

            $table->foreign('venda_id')->references('id')->on('vendas');
            $table->foreign('produto_id')->references('id')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itens_vendas');
    }
}
