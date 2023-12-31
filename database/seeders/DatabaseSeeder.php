<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(50)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);



        $this->call([
            DatosPdfSeed::class,
            DetalleContratoNuevoSeed::class,
            DetalleRetroventaContratosSeed::class,
            DetalleOrdenesVentasRemisionadasSeed::class,
            DetalleResolucionContratosVencidosSeed::class,
            DetalleSalidaDecomisionSeed::class,
            DetalleArticulosTrasladosEntradaSeed::class,
            DetalleArticulosTrasladosSalidaSeed::class,
            DetalleComprasSeed::class,
            DetalleOtrosIngresosSeed::class,
            DetalleEgresosSeeder::class,
            DetalleGastosSeeder::class,
            JoyeriasSeed::class

        ]);
    }
}
