<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laravel', function (Blueprint $table) {
            $table->string('id_medidor');
            $table->string('nombre');
            $table->string('cedula');
            $table->string('direccion');
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('laravel');
    }
};