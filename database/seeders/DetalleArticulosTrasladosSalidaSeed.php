<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleArticulosTrasladosSalidaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detalle_articuos_traslados_salida')->insert(
            array(
                array(
                    "descripcion" => "LINGOTE ORO",
                    "gramos" => "15,00",
                    "valor_compra" => " 3.151.231,83"
                ),
                array(
                    "descripcion" => "ORO 18K NAL REFAC",
                    "gramos" => "3,70",
                    "valor_compra" => " 250.000,00",
                ),
                array(
                    "descripcion" => "OTROS",
                    "gramos" => ",00",
                    "valor_compra" => ",00",
                ),
                array(
                    "descripcion" => "TOTAL:",
                    "gramos" => "18,70",
                    "valor_compra" => "3.401.231,83",
                ),

            )
        );
    }
}
