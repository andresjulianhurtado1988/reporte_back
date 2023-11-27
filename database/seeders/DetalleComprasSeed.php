<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleComprasSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detalle_compras')->insert(
            array(

                array(
                    "descripcion" => "COMPRAS DEVUELTAS",
                    "gramos" => ",00",
                    "subtotal" => ",00",
                    "valor_iva" => ",00",
                    "rte_fte" => ",00",
                    "rte_ica" => ",00",
                    "rte_iva" => ",00",
                    "rte_iva_simpl" => ",00",
                    "cree" => ",00",
                    "total" => ",00",

                ),
                array(
                    "descripcion" => "TOTALES",
                    "gramos" => ",00",
                    "subtotal" => ",00",
                    "valor_iva" => ",00",
                    "rte_fte" => ",00",
                    "rte_ica" => ",00",
                    "rte_iva" => ",00",
                    "rte_iva_simpl" => ",00",
                    "cree" => ",00",
                    "total" => ",00",
                ),

            )
        );
    }
}
