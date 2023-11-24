<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleOrdenesVentasRemisionadasSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detalle_ordenes_ventas_remisionadas')->insert(
            array(
                array(
                    "id_orden" => "393",
                    "id_venta" => "65",
                    "observacion" => "ORO REMISION VENTA STSM- 419",
                    "fecha" => "17/10/2023",
                    "cat_art" => "4",
                    "grm_libre" => "13,74",
                    "grm_rem" => "13,74",
                    "valor_compra" => "2.673.217,68",
                    "subtotal" => "3.368.223,00",
                    "regalias" => ",00",
                    "retencion" => "70.761,00",
                    "valor_venta" => "3.297.462,00",
                ),

                array(
                    "id_orden" => "414",
                    "id_venta" => "66",
                    "observacion" => "ORO REMISION RESOLUCION SEPTIEMBRE 2023",
                    "fecha" => "19/10/2023",
                    "cat_art" => "64",
                    "grm_libre" => "182,00",
                    "grm_rem" => "180,58",
                    "valor_compra" => "27.730.000,00",
                    "subtotal" => "30.766.049,00",
                    "regalias" => "1.004.916,00",
                    "retencion" => "307.660,00",
                    "valor_venta" => "29.453.476,00",
                ),

                array(
                    "id_orden" => "",
                    "id_venta" => "",
                    "observacion" => "",
                    "fecha" => "TOTALES:",
                    "cat_art" => "68",
                    "grm_libre" => "195,74",
                    "grm_rem" => "194,32",
                    "valor_compra" => "30.403.217,68",
                    "subtotal" => "34.134.272,00",
                    "regalias" => "1.004.916,00",
                    "retencion" => "378.421,00",
                    "valor_venta" => "32.750.938,00",
                ),

            )
        );
    }
}

