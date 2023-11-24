<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleResolucionContratosVencidosSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detalle_resolucion_contratos_vencidos')->insert(
            array(
                array(
                    "descripcion" => "ORO 10K",
                    "gramos" => "1,40",
                    "valor_articulos" => "35.000,00",
                    "promedio" => "25.000,00"
                ),
                array(
                    "descripcion" => "ORO 14K",
                    "gramos" => "2,30",
                    "valor_articulos" => "190.000,00",
                    "promedio" => "82.608,70"
                ),
                array(
                    "descripcion" => "ORO 18K ITALIANO",
                    "gramos" => "87,50",
                    "valor_articulos" => "14.573.000,00",
                    "promedio" => "166.548,57"
                ),
                array(
                    "descripcion" => "ORO 18K NACIONAL",
                    "gramos" => "114,30",
                    "valor_articulos" => "16.635.000,00",
                    "promedio" => "145.538,06"
                ),
                array(
                    "descripcion" => "ORO BUCARAMANGA",
                    "gramos" => "1,30",
                    "valor_articulos" => " 52.000,00",
                    "promedio" => "40.000,00"
                ),
                array(
                    "descripcion" => "OTROS ARTÍCULOS",
                    "gramos" => "",
                    "valor_articulos" => ",00",
                    "promedio" => ""
                ),
                array(
                    "descripcion" => "TOTAL:",
                    "gramos" => "206,80",
                    "valor_articulos" => "31.485.000,00",
                    "promedio" => ""
                ),


            )
        );
    }
}
