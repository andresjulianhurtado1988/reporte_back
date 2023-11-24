<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatosPdfSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detalle_ventas')->insert(
            array(

                array(
                    "descripcion" => "VTA VITRINA LINGOTE ORO",
                    "gramos" => "5,00",
                    "valor_compra" => "1.050.410,61",
                    "subtotal" => "1.764.705,88",
                    "base_iva" => "1.764.705,88",
                    "valor_iva" => "335.294,12",
                    "valor_rte_fte" => ",00",
                    "valor_rte_ica" => ",00",
                    "valor_rte_iva" => ",00",
                    "auto_rte" => ",00",
                    "total" => "2.100.000,00"
                ),
                array(
                    "descripcion" => "VTA VITRINA ORO 10K",
                    "gramos" => "1,00",
                    "valor_compra" => "160.000,00",
                    "subtotal" => "160.000,00",
                    "base_iva" => "160.000,00",
                    "valor_iva" => "30.400,00",
                    "valor_rte_fte" => ",00",
                    "valor_rte_ica" => ",00",
                    "valor_rte_iva" => ",00",
                    "auto_rte" => ",00",
                    "total" => "190.400,00"
                ),
                array(
                    "descripcion" => "VTA VITRINA ORO 18K ITA REFAC",
                    "gramos" => "25,00",
                    "valor_compra" => "4.370.000,00",
                    "subtotal" => "6.821.007,56",
                    "base_iva" => "6.821.007,56",
                    "valor_iva" => "1.295.991,44",
                    "valor_rte_fte" => ",00",
                    "valor_rte_ica" => ",00",
                    "valor_rte_iva" => ",00",
                    "auto_rte" => ",00",
                    "total" => "8.116.999,00"
                ),
                array(
                    "descripcion" => "VTA VITRINA ORO 18K NAL REFAC",
                    "gramos" => "6,70",
                    "valor_compra" => "945.000,00",
                    "subtotal" => "1.825.625,21",
                    "base_iva" => "1.825.625,21",
                    "valor_iva" => "346.868,79",
                    "valor_rte_fte" => ",00",
                    "valor_rte_ica" => ",00",
                    "valor_rte_iva" => ",00",
                    "auto_rte" => ",00",
                    "total" => "2.172.494,00"
                ),
                array(
                    "descripcion" => "VTA VITRINA ORO JOYERÍA IMPORTADA",
                    "gramos" => "25,75",
                    "valor_compra" => "4.880.619,03",
                    "subtotal" => "8.098.316,81",
                    "base_iva" => "8.098.316,81",
                    "valor_iva" => "1.538.680,19",
                    "valor_rte_fte" => ",00",
                    "valor_rte_ica" => ",00",
                    "valor_rte_iva" => ",00",
                    "auto_rte" => ",00",
                    "total" => "9.636.997,00"
                ),
                array(
                    "descripcion" => "VTA VITRINA ORO JOYERÍA NACIONAL",
                    "gramos" => "16,86",
                    "valor_compra" => "3.333.570,77",
                    "subtotal" => "4.600.442,02",
                    "base_iva" => "4.600.442,02",
                    "valor_iva" => "874.083,98",
                    "valor_rte_fte" => ",00",
                    "valor_rte_ica" => ",00",
                    "valor_rte_iva" => ",00",
                    "auto_rte" => ",00",
                    "total" => "5.474.526,00"
                ),
                array(
                    "descripcion" => "VTA VITRINA PLATA",
                    "gramos" => "160,70",
                    "valor_compra" => "113.000,00",
                    "subtotal" => "402.940,34",
                    "base_iva" => "402.940,34",
                    "valor_iva" => "76.558,66",
                    "valor_rte_fte" => ",00",
                    "valor_rte_ica" => ",00",
                    "valor_rte_iva" => ",00",
                    "auto_rte" => ",00",
                    "total" => "479.499,00"
                ),
                array(
                    "descripcion" => "VTA PLAN SEP LINGOTE ORO",
                    "gramos" => "1,00",
                    "valor_compra" => "157.646,29",
                    "subtotal" => "378.151,26",
                    "base_iva" => "378.151,26",
                    "valor_iva" => "71.848,74",
                    "valor_rte_fte" => ",00",
                    "valor_rte_ica" => ",00",
                    "valor_rte_iva" => ",00",
                    "auto_rte" => ",00",
                    "total" => "450.000,00"
                ),
                array(
                    "descripcion" => "VTA PLAN SEP ORO 18K ITA REFAC",
                    "gramos" => "9,40",
                    "valor_compra" => "1.520.000,00",
                    "subtotal" => "2.564.284,87",
                    "base_iva" => "2.564.284,87",
                    "valor_iva" => "487.214,13",
                    "valor_rte_fte" => ",00",
                    "valor_rte_ica" => ",00",
                    "valor_rte_iva" => ",00",
                    "auto_rte" => ",00",
                    "total" => "3.051.499,00"
                ),
                array(
                    "descripcion" => "VTA PLAN SEP ORO 18K NAL REFAC",
                    "gramos" => "5,20",
                    "valor_compra" => "823.000,00",
                    "subtotal" => "1.415.966,39",
                    "base_iva" => "1.415.966,39",
                    "valor_iva" => "269.033,61",
                    "valor_rte_fte" => ",00",
                    "valor_rte_ica" => ",00",
                    "valor_rte_iva" => ",00",
                    "auto_rte" => ",00",
                    "total" => "1.685.000,00"
                ),
                array(
                    "descripcion" => "VTA PLAN SEP ORO JOYERÍA IMPORTADA",
                    "gramos" => "2,32",
                    "valor_compra" => "451.373,00",
                    "subtotal" => "728.907,56",
                    "base_iva" => "728.907,56",
                    "valor_iva" => "138.492,44",
                    "valor_rte_fte" => ",00",
                    "valor_rte_ica" => ",00",
                    "valor_rte_iva" => ",00",
                    "auto_rte" => ",00",
                    "total" => "867.400,00"
                ),
                array(
                    "descripcion" => "VTA PLAN SEP ORO JOYERÍA NACIONAL",
                    "gramos" => "6,59",
                    "valor_compra" => "924.260,05",
                    "subtotal" => "1.977.310,92",
                    "base_iva" => "1.977.310,92",
                    "valor_iva" => "375.689,08",
                    "valor_rte_fte" => ",00",
                    "valor_rte_ica" => ",00",
                    "valor_rte_iva" => ",00",
                    "auto_rte" => ",00",
                    "total" => "2.353.000,00"
                ),
                array(
                    "descripcion" => "VTA SERV HONORARIOS",
                    "gramos" => "",
                    "valor_compra" => ",00",
                    "subtotal" => "592.778,99",
                    "base_iva" => "592.778,99",
                    "valor_iva" => "112.628,01",
                    "valor_rte_fte" => "65.205,69",
                    "valor_rte_ica" => ",00",
                    "valor_rte_iva" => "16.894,20",
                    "auto_rte" => ",00",
                    "total" => "623.307,11"
                ),
                array(
                    "descripcion" => "OTROS ARTÍCULOS",
                    "gramos" => "",
                    "valor_compra" => "67.763,00",
                    "subtotal" => "161.517,65",
                    "base_iva" => "161.517,65",
                    "valor_iva" => "30.688,35",
                    "valor_rte_fte" => ",00",
                    "valor_rte_ica" => ",00",
                    "valor_rte_iva" => ",00",
                    "auto_rte" => ",00",
                    "total" => "192.206,00"
                ),
                array(
                    "descripcion" => "VTAS DEVUELTAS",
                    "gramos" => "",
                    "valor_compra" => ",00",
                    "subtotal" => ",00",
                    "base_iva" => ",00",
                    "valor_iva" => ",00",
                    "valor_rte_fte" => ",00",
                    "valor_rte_ica" => ",00",
                    "valor_rte_iva" => "",
                    "auto_rte" => ",00",
                    "total" => ""
                ),
                array(
                    "descripcion" => "TOTALES",
                    "gramos" => "265,52",
                    "valor_compra" => "18.796.642,75",
                    "subtotal" => "31.491.955,46",
                    "base_iva" => "31.491.955,46",
                    "valor_iva" => "5.983.471,54",
                    "valor_rte_fte" => "65.205,69",
                    "valor_rte_ica" => ",00",
                    "valor_rte_iva" => "16.894,20",
                    "auto_rte" => ",00",
                    "total" => "37.393.327,11"
                ),



            )
        );
    }
}
