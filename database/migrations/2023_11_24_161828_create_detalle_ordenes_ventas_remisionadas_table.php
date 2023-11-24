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
        Schema::create('detalle_ordenes_ventas_remisionadas', function (Blueprint $table) {
            $table->id();
            $table->string('id_orden', 100);
            $table->string('id_venta', 100);
            $table->string('observacion', 100);
            $table->string('fecha', 100);
            $table->string('cat_art', 100);
            $table->string('grm_libre', 100);
            $table->string('grm_rem', 100);
            $table->string('valor_compra', 100);
            $table->string('subtotal', 100);
            $table->string('regalias', 100);
            $table->string('retencion', 100);
            $table->string('valor_venta', 100);
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_ordenes_ventas_remisionadas');
    }
};
