<?php

namespace App\Http\Controllers;

use App\Models\ReportePrueba;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ReporteExport;
use App\Models\Ventas;
use App\Models\DetalleRetroventaContratos;
use App\Models\DetalleContratoNuevo;
use App\Models\DetalleOrdenesVentasRemisionadas;
use App\Models\DetalleResolucionContratosVencidos;
use App\Models\DetalleSalidaDecomision;
use App\Models\DetalleArticulosTrasladosEntrada;
use App\Models\DetalleArticulosTrasladosSalida;

class ConsolidadoController extends Controller
{
    public function reportePdfConsolidado(Request $request)
    {

        $detalleRetroventaContratos = DetalleRetroventaContratos::all();
        $detalleContratoNuevo = DetalleContratoNuevo::all();
        $detalleVentas = Ventas::all();
        $detalleOrdenesVentasRemisionadas = DetalleOrdenesVentasRemisionadas::all();
        $detalleResolContVencidos = DetalleResolucionContratosVencidos::all();
        $detalleSalidasXDecomision = DetalleSalidaDecomision::all();
        $detalleArticulosTrasladosEntrada = DetalleArticulosTrasladosEntrada::all();
        $detalleArticulosTrasladoSalida = DetalleArticulosTrasladosSalida::all();


        $pdf = Pdf::loadView(
            '/pdfConsolDatos',
            compact(
                'detalleRetroventaContratos',
                'detalleContratoNuevo',
                'detalleVentas',
                'detalleOrdenesVentasRemisionadas',
                'detalleResolContVencidos',
                'detalleSalidasXDecomision',
                'detalleArticulosTrasladosEntrada',
                'detalleArticulosTrasladoSalida'
            )
        );

        return $pdf->stream();

    }

    public function ingresosData()
    {

        $contratos = [
            [
                "column_name" => "Capital",
                "valores" => "113.930.000,00"
            ],
            [
                "column_name" => "Retroventa",
                "valores" => "22.172.300,00"
            ],
            [
                "column_name" => "Total",
                "valores" => "136.102.300,00"
            ],
            [
                "column_name" => "Total Prorrogas",
                "valores" => "25.192.150,00"
            ],

        ];
        $almacen = [
            [
                "column_name" => "Total Ventas",
                "valores" => "37.393.327,11"
            ],
            [
                "column_name" => "Abonos Plan Separe",
                "valores" => "5.680.000,00"
            ],
            [
                "column_name" => "Valor Otros Ingresos",
                "valores" => "71.412.227,00"
            ],
            [
                "column_name" => "Devolución Compras",
                "valores" => ",00"
            ],
        ];

        $total = '275.780.004,11';

        return [
            'contratos' => $contratos,
            'almacen' => $almacen,
            'total' => $total
        ];

    }

    public function egresosData()
    {

        $contratos = [
            [
                "column_name" => "Compras Contratos",
                "valores" => "235.957.000,00"
            ],
            [
                "column_name" => "Prórrogas Devueltas",
                "valores" => ",00"
            ]

        ];
        $almacen = [
            [
                "column_name" => "Compra Artículos Almacén:",
                "valores" => ",00"
            ],
            [
                "column_name" => "Devoluciones",
                "valores" => ",00"
            ],
            [
                "column_name" => "IVA Devoluciones",
                "valores" => ",00"
            ],
            [
                "column_name" => "Egresos",
                "valores" => "47.381.643,11"
            ],
            [
                "column_name" => "Gastos",
                "valores" => "15.107.031,00"
            ],
            [
                "column_name" => "TOTAL Egresos/Gastos",
                "valores" => "62.488.674,11"
            ]
        ];

        $total = '298.445.674,11';

        return [
            'contratos' => $contratos,
            'almacen' => $almacen,
            'total' => $total
        ];

    }

}
