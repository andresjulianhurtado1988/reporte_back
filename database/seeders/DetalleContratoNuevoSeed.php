<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleContratoNuevoSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detalle_contrato_nuevo')->insert(
            array(

                array(
                    "descripcion" => "ORO 10K",
                    "gramos" => "19,60",
                    "valor_articulos" => "685.000,00",
                    "promedio" => "34.948,98"
                ),
                array(
                    "descripcion" => "ORO 14K",
                    "gramos" => "54,30",
                    "valor_articulos" => "3.270.000,00",
                    "promedio" => "60.220,99"
                ),
                array(
                    "descripcion" => "ORO 18K ITALIANO",
                    "gramos" => "686,60",
                    "valor_articulos" => " 96.201.000,00",
                    "promedio" => "140.112,15"
                ),
                array(
                    "descripcion" => "ORO 18K NACIONAL",
                    "gramos" => "1.086,20",
                    "valor_articulos" => "133.541.000,00",
                    "promedio" => "122.943,29"
                ),
                array(
                    "descripcion" => "ORO BUCARAMANGA",
                    "gramos" => "9,70",
                    "valor_articulos" => "423.000,00",
                    "promedio" => " 43.608,25"
                ),
                array(
                    "descripcion" => "PLATA",
                    "gramos" => "1.228,40",
                    "valor_articulos" => "1.837.000,00",
                    "promedio" => "1.495,44"
                ),
                array(
                    "descripcion" => "OTROS ARTÍCULOS",
                    "gramos" => "",
                    "valor_articulos" => ",00",
                    "promedio" => ""
                ),
                array(
                    "descripcion" => "TOTAL:",
                    "gramos" => "3.084,80",
                    "valor_articulos" => "235.957.000,00",
                    "promedio" => "76.490,21"
                ),

            )
        );
    }
}


