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
        Schema::create('detalle_articuos_traslados_salida', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion', 100);
            $table->string('gramos', 100);
            $table->string('valor_compra', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_articuos_traslados_salida');
    }
};
