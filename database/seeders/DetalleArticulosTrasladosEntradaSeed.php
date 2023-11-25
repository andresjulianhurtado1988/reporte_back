<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleArticulosTrasladosEntradaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detalle_articuos_traslados_entrada')->insert(
            array(
                array(
                    "descripcion" => "LINGOTE ORO",
                    "gramos" => "20,00",
                    "valor_compra" => "  4.201.642,44"
                ),
                array(
                    "descripcion" => "ORO 18K NAL REFAC",
                    "gramos" => "8,80",
                    "valor_compra" => "1.534.494,00",
                ),
                array(
                    "descripcion" => "ORO JOYERÍA NACIONAL",
                    "gramos" => "38,03",
                    "valor_compra" => "6.082.938,35",
                ),
                array(
                    "descripcion" => "OTROS",
                    "gramos" => ",00",
                    "valor_compra" => ",00",
                ),
                array(
                    "descripcion" => "TOTAL:",
                    "gramos" => "66,83",
                    "valor_compra" => "11.819.074,79",
                ),

            )
        );
    }
}
