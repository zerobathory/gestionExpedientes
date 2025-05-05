<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('expedientes', function (Blueprint $table) {
            $table->id('idexpedientes');
            $table->integer('numero_expediente')->unique();
            $table->string('asunto');
            $table->dateTime('fecha_inicio');
            $table->unsignedBigInteger('id_estatus');
            $table->unsignedBigInteger('id_usuario_registra');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expedientes');
        $table->dropSoftDeletes();
    }
};
