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
        Schema::create('detalle_otros_ingresos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_ingreso', 100);
            $table->string('descripcion', 100);
            $table->string('valor', 100);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_otros_ingresos');
    }
};
