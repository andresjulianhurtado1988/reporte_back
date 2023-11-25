<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleSalidaDecomisionSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detalle_salidas_decomision')->insert(
            array(

                array(
                    "descripcion" => "OTROS ARTÍCULOS",
                    "gramos" => "",
                    "valor_articulos" => ",00",
                    "promedio" => ""
                ),
                array(
                    "descripcion" => "TOTAL:",
                    "gramos" => ",00",
                    "valor_articulos" => ",00",
                    "promedio" => ""
                ),

            )
        );
    }
}
