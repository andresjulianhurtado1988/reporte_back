<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleOtrosIngresosSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detalle_otros_ingresos')->insert(
            array(

                array(
                    "tipo_ingreso" => "ANTICIPO FABRICACIÓN JOYERÍA",
                    "descripcion" => "",
                    "valor" => "4.623.620,00",
                ),
                array(
                    "tipo_ingreso" => "CUENTA POR PAGAR: A TERCEROS",
                    "descripcion" => "",
                    "valor" => "1.613.139,00"
                ),

                array(
                    "tipo_ingreso" => "OPERACIONES EFECTY",
                    "descripcion" => "",
                    "valor" => "3.966.752,00",
                ),
                array(
                    "tipo_ingreso" => "REINTEGRO GASTO COMUN RESTAURANTE",
                    "descripcion" => "",
                    "valor" => "5.000,00"
                ),

                array(
                    "tipo_ingreso" => "TRASLADO DE FONDOS ENTRADA-EFECTIVO",
                    "descripcion" => "",
                    "valor" => "61.203.716,00",
                ),

                array(
                    "tipo_ingreso" => "",
                    "descripcion" => "TOTAL",
                    "valor" => "71.412.227,00",
                ),
            )
        );
    }
}

