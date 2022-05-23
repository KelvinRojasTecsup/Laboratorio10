<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetasGuardadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas_guardadas', function (Blueprint $table) {
            $table->id();
            $table->string('categoria');
            $table->string('autor');
            $table->datetime('fecha_creacion');
            $table->string('ingredientes');
            $table->string('preparacion');
            $table->string('foto');
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
        Schema::dropIfExists('recetas_guardadas');
    }
}
