<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToProducotsCaracteristicas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('producto_caracteristicas', function (Blueprint $table) {
            $table->string('marca', 80)->nullable();
            $table->string('potencia', 80)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('producto_caracteristicas', function (Blueprint $table) {
            //
        });
    }
}
