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
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();
            $table->integer('nom_plazas');
            $table->string('otros_datos');
            $table->date('fecha');

            $table->unsignedBigInteger('viajero_id')->nullable();
            $table->foreign('viajero_id')
                  ->references('id')
                  ->on('viajeros')
                  ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viajes');
    }
};
