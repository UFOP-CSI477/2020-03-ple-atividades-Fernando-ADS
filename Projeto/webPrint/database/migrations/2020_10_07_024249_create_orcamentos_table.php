<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrcamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamentos', function (Blueprint $table) {
          $table->id();
          $table->string('status');
          $table->unsignedBigInteger('cliente_id');
          $table->unsignedBigInteger('funcionario_id');
          $table->unsignedBigInteger('produto_id');
          $table->float('quantidade');
          $table->float('valortotal');
          $table->timestamps();

          $table->foreign('cliente_id')->references('id')->on('clientes');
          $table->foreign('funcionario_id')->references('id')->on('funcionarios');
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
        Schema::dropIfExists('orcamentos');
    }
}
