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
        Schema::create('tipo_pagos', function (Blueprint $table) {
            $table->id();
            $table->string('concepto');

            $table->unsignedBigInteger('pago_id')->nullable();
            $table->foreign('pago_id')
                  ->references('id')
                  ->on('pagos')
                  ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_pagos');
    }
};
