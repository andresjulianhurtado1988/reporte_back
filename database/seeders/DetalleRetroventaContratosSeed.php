<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleRetroventaContratosSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detalle_retroventa_contratos')->insert(
            array(
                array(
                    "descripcion" => "ORO 10K",
                    "gramos" => "2,90",
                    "valor_articulos" => "70.000,00",
                    "promedio" => "24.137,93"
                ),
                array(
                    "descripcion" => "ORO 14K",
                    "gramos" => "46,10",
                    "valor_articulos" => "2.735.000,00",
                    "promedio" => "59.327,55"
                ),
                array(
                    "descripcion" => "ORO 18K ITALIANO",
                    "gramos" => "325,90",
                    "valor_articulos" => "39.888.000,00",
                    "promedio" => "122.393,37"
                ),
                array(
                    "descripcion" => "ORO 18K NACIONAL",
                    "gramos" => "661,20",
                    "valor_articulos" => "70.870.000,00",
                    "promedio" => "107.183,91"
                ),
                array(
                    "descripcion" => "ORO BUCARAMANGA",
                    "gramos" => "10,80",
                    "valor_articulos" => "272.000,00",
                    "promedio" => "25.185,19"
                ),
                array(
                    "descripcion" => "PLATA",
                    "gramos" => "72,70",
                    "valor_articulos" => "95.000,00",
                    "promedio" => "1.306,74"
                ),
                array(
                    "descripcion" => "OTROS ARTÍCULOS",
                    "gramos" => "",
                    "valor_articulos" => ",00",
                    "promedio" => ""
                ),
                array(
                    "descripcion" => "TOTAL:",
                    "gramos" => "1.119,60",
                    "valor_articulos" => "113.930.000,00",
                    "promedio" => "101.759,56"
                ),


            )
        );
    }
}
