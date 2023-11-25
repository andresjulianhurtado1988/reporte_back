<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalle_salidas_decomision', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion', 100);
            $table->string('gramos', 100);
            $table->string('valor_articulos', 100);
            $table->string('promedio', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_salidas_decomision');
    }
};
