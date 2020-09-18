<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cuenta_id')->references('id')->on('cuentas');
            $table->foreignId('tarjeta_id')->references('id')->on('tarjetas');
            $table->foreignId('tipoOperacion_id')->references('id')->on('tipos_operaciones');
            $table->float('monto', 20, 2);
            $table->string('codigo');
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
        Schema::dropIfExists('operaciones');
    }
}
