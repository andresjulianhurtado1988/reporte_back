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
        Schema::create('detalle_egresos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_egreso', 250);
            $table->string('descripcion', 250);
            $table->string('subtotal', 100);
            $table->string('vlr_iva', 100);
            $table->string('vlr_rte_fte', 100);
            $table->string('vlr_rte_iva', 100);
            $table->string('vlr_rte_ica', 100);
            $table->string('vlr_rte_cree', 100);
            $table->string('valor', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_egresos');
    }
};
