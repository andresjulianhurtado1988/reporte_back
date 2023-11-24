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
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion', 100);
            $table->string('gramos', 100);
            $table->string('valor_compra', 100);
            $table->string('subtotal', 100);
            $table->string('base_iva', 100);
            $table->string('valor_iva', 100);
            $table->string('valor_rte_fte', 100);
            $table->string('valor_rte_ica', 100);
            $table->string('valor_rte_iva', 100);
            $table->string('auto_rte', 100);
            $table->string('total', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_ventas');
    }
};
