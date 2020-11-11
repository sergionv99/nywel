<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoCaracteristicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_caracteristicas', function (Blueprint $table) {
            $table->id();
            $table->string('material')->nullable();
            $table->string('dimensiones')->nullable();
            $table->string('color')->nullable();
            $table->integer('litros')->nullable();
            $table->integer('mililitros')->nullable();
            $table->string('tamanyo')->nullable();
            $table->bigInteger('producto_id')->unsigned();
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_caracteristicas');
    }
}
