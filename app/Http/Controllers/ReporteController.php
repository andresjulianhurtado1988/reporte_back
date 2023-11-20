<?php

namespace App\Http\Controllers;

use App\Models\ReportePrueba;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{

    public function pruebaRuta()
    {
        $algo = $this->ingresosData();




        // foreach ($algo as $value) {
        //     $contratos = $value['contratos'];
        // }

        return DB::table('tbl_tienda')
            ->select(
                'nombre',
                'direccion',
                'telefono',
                'correo_electronico',
            )->get();

        //   return $algo['contratos'];
        // return $algo['contratos'];
        //return response()->json([

        // 'tiendas' => DB::table('tbl_tienda')
        //     ->select(
        //         'nombre',
        //         'direccion',
        //         'telefono',
        //         'correo_electronico',
        //     )->get(),
        // 'ciudades' => DB::table('tbl_ciudad')
        //     ->select('nombre', 'codigo_dane')
        //     ->where('id', '<', 8)->get(),
        //     'respuesta' => $algo['contratos']
        // ]);

    }
    public function reportePdf(Request $request)
    {


        $json = $request->input('json', null);
        $params_array = json_decode($json, true);

        $fecha_ini = date("Y-m-d", strtotime($params_array['fechaIni']));
        $fecha_fin = date("Y-m-d", strtotime($params_array['fechaFin']));

    }

    public function generarPdf(Request $request)
    {

        // $json = $request->input('json', null);
        // $params_array = json_decode($json, true);

        // const datosFilter = {
        //     misTiendas: misTiendas,
        //     fechaIni: fechaIni,
        //     fechaFin: fechaFin,
        //   };

        //   $misTiendas = $params_array['misTiendas'];

        $ingresos = $this->ingresosData();
        $egresos = $this->egresosData();
        $detVentaArticulo = $this->detalleVentaArticulos();
        $detalleEgresos = $this->detalleEgresosGastos();
        $otrosIngresos = $this->otrosIngresos();
        $detalleContratoNuevo = $this->detalleContratoNuevo();
        $detalleRetroventaContratos = $this->detalleRetroventaContratos();
        $rangosFacturasDocumentos = $this->rangosFacturasDocumentos();


        // DATOS DE INGRESO
        $contratosIngresos = $ingresos['contratos'];
        $almacenIngresos = $ingresos['almacen'];
        $totalIngresos = $ingresos['total'];

        // DATOS DE EGRESO
        $contratosEgresos = $egresos['contratos'];
        $almacenEgresos = $egresos['almacen'];
        $totalEgresos = $egresos['total'];

        // DATOS DE VENTA ARTÍCULO
        $detalleVentaArticulo = $detVentaArticulo['detalleVentaArticulo'];

        // DATOS DE DETALLE DE EGRESOS VS GASTOS
        $detalleEgresosGastos = $detalleEgresos['detalleEgresos'];

        // DATOS DETALLE OTROS INGRESOS
        $otrosIngresos = $otrosIngresos['otrosIngresos'];

        // DATOS DETALLE CONTRATO NUEVO
        $detalleContratoNuevo = $detalleContratoNuevo['detalleContratoNuevo'];

        // DATOS DETALLE RETROVENTAS CONTRATOS
        $detalleRetroventaContratos = $detalleRetroventaContratos['detalleRetroventaContratos'];

        // DATOS RANGOS FACTURAS Y/O DOCUMENTOS

        $rangosFacturasDocumentos = $rangosFacturasDocumentos['rangosFacturasDocumentos'];

        $fileName = "pdfDatos";


        $pdf = Pdf::loadView(
            '/pdfDatos',
            compact(
                'contratosIngresos',
                'almacenIngresos',
                'totalIngresos',
                'contratosEgresos',
                'almacenEgresos',
                'totalEgresos',
                'detalleVentaArticulo',
                'detalleEgresosGastos',
                'otrosIngresos',
                'detalleContratoNuevo',
                'detalleRetroventaContratos',
                'rangosFacturasDocumentos',
                'fileName'
            )
        );
        return $pdf->stream();


    }

    public function ingresosData()
    {

        $contratos = [
            [
                "column_name" => 'Capital Retroventa',
                "valores" => '2.020.000,00'
            ],
            [
                "column_name" => 'RtIva Neto - Capital RtIva',
                "valores" => '482.700,00'
            ],
            [
                "column_name" => 'Total Retroventa',
                "valores" => '2.502.700,00'
            ],
            [
                "column_name" => 'Prórrogas',
                "valores" => '300.200,00'
            ]
        ];

        $almacen = [
            [
                "column_name" => "Ventas",
                "valores" => '357.390,00'
            ],
            [
                "column_name" => "Abono Plan Separe",
                "valores" => ',00'
            ],
            [
                "column_name" => "Valor Otros Ingresos",
                "valores" => '15.994.798,00'
            ],
            [
                "column_name" => "Devolucion Compras",
                "valores" => ',00'
            ],
        ];


        $total = '19.155.088,00';

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
                "column_name" => 'Compras Contratos',
                "valores" => '3.215.000,00'
            ],
            [
                "column_name" => 'Prórrogas Devueltas',
                "valores" => ',00'
            ]
        ];

        $almacen = [
            [
                "column_name" => 'Compras Artículos Almacén',
                "valores" => ',00'
            ],
            [
                "column_name" => 'Devoluciones',
                "valores" => ',00'
            ],
            [
                "column_name" => 'IVA Devoluciones',
                "valores" => ',00'
            ],
            [
                "column_name" => 'Egresos Gastos',
                "valores" => '5.875.384,00'
            ],
        ];


        $total = '9.090.384,00';


        return [
            'contratos' => $contratos,
            'almacen' => $almacen,
            'total' => $total
        ];
    }

    public function detalleVentaArticulos()
    {
        $detalleVentaArticulo = [
            [
                "descripcion" => 'ORO 18K NACIONAL',
                "grm" => '1.10',
                "valor_iva" => '57.062,27',
                "subtotal" => '300.327,73',
                "total" => '357.390,00'
            ],

            [
                "descripcion" => 'OTROS ARTÍCULOS',
                "grm" => '',
                "valor_iva" => '',
                "subtotal" => ',00',
                "total" => ''
            ],

            [
                "descripcion" => 'DEVOLUCIONES VTAS',
                "grm" => '',
                "valor_iva" => '',
                "subtotal" => ',00',
                "total" => ''
            ],
            [
                "descripcion" => 'TOTALES',
                "grm" => '1,10',
                "valor_iva" => '57.062,27',
                "subtotal" => '300.327,73',
                "total" => '357.390,00',
            ]
        ];


        return [
            'detalleVentaArticulo' => $detalleVentaArticulo

        ];
    }


    public function detalleEgresosGastos()
    {
        $detalleEgresos = [

            [
                "tipo_gasto" => 'COMPRAS ÚTILES DE PAPELERÍA',
                "valor_iva" => '',
                "subtotal" => '120.000,00',
                "valor" => '120.000,00'
            ],

            [
                "tipo_gasto" => 'SS PF ENTIDADES PROMOTORAS DE SALUD',
                "valor_iva" => '',
                "subtotal" => '142.000,00',
                "valor" => '142.000,00'
            ],

            [
                "tipo_gasto" => 'SS PF FONDOS DE PENSIONES AFP',
                "valor_iva" => '',
                "subtotal" => '567.500,00',
                "valor" => '567.500,00'
            ],

            [
                "tipo_gasto" => 'ADMIN DE RIESGOS LABORALES ARL',
                "valor_iva" => '',
                "subtotal" => '18.600,00',
                "valor" => '18.600,00'
            ],

            [
                "tipo_gasto" => 'SS PF CAJA DE COMPENSACIÓN FAMILIAR',
                "valor_iva" => '',
                "subtotal" => '142.000,00',
                "valor" => '142.000,00'
            ],

            [
                "tipo_gasto" => 'TRANSFORMACIÓN DE ORO',
                "valor_iva" => '293.882,00',
                "subtotal" => '2.051.929,00',
                "valor" => '2.249.092,00'
            ],

            [
                "tipo_gasto" => 'ASESORÍAS COMERCIALES',
                "valor_iva" => '64.741,00',
                "subtotal" => '340.743,00',
                "valor" => '358.291,00'
            ],

            [
                "tipo_gasto" => 'TRASLADO DE FONDO SALIDA DATÁFONO',
                "valor_iva" => '',
                "subtotal" => '357.390,00',
                "valor" => '357.390,00'
            ],

            [
                "tipo_gasto" => 'CUENTA POR PAGAR A TERCEROS',
                "valor_iva" => '',
                "subtotal" => '690.844,00',
                "valor" => '690.844,00'
            ],

            [
                "tipo_gasto" => 'SERVICIO REFACCIÓN',
                "valor_iva" => '66.120,00',
                "subtotal" => '348.000,00',
                "valor" => '390.282,00'
            ],

            [
                "tipo_gasto" => 'COMOSIÓN MASRED',
                "valor_iva" => '92.182,00',
                "subtotal" => '485.173,00',
                "valor" => '510.158,00'
            ],

            [
                "tipo_gasto" => 'COMPRAS DE INVENTARIO DE CONSIGNACIÓN',
                "valor_iva" => '52.566,00',
                "subtotal" => '276.661,00',
                "valor" => '329.227,00'
            ],
            [
                "tipo_gasto" => 'OTRA COSA DE PRUEBA',
                "valor_iva" => '00.000.000,00',
                "subtotal" => '00.000.000,00',
                "valor" => '00.000.000,00'
            ],
            [
                "tipo_gasto" => 'OTRA COSA DE PRUEBA',
                "valor_iva" => '00.000.000,00',
                "subtotal" => '00.000.000,00',
                "valor" => '00.000.000,00'
            ],
            [
                "tipo_gasto" => 'OTRA COSA DE PRUEBA',
                "valor_iva" => '00.000.000,00',
                "subtotal" => '00.000.000,00',
                "valor" => '00.000.000,00'
            ],
            [
                "tipo_gasto" => 'OTRA COSA DE PRUEBA',
                "valor_iva" => '00.000.000,00',
                "subtotal" => '00.000.000,00',
                "valor" => '00.000.000,00'
            ],
            [
                "tipo_gasto" => 'OTRA COSA DE PRUEBA',
                "valor_iva" => '00.000.000,00',
                "subtotal" => '00.000.000,00',
                "valor" => '00.000.000,00'
            ],
            [
                "tipo_gasto" => 'OTRA COSA DE PRUEBA',
                "valor_iva" => '00.000.000,00',
                "subtotal" => '00.000.000,00',
                "valor" => '00.000.000,00'
            ],
            [
                "tipo_gasto" => 'OTRA COSA DE PRUEBA',
                "valor_iva" => '00.000.000,00',
                "subtotal" => '00.000.000,00',
                "valor" => '00.000.000,00'
            ],
            [
                "tipo_gasto" => 'OTRA COSA DE PRUEBA',
                "valor_iva" => '00.000.000,00',
                "subtotal" => '00.000.000,00',
                "valor" => '00.000.000,00'
            ],
            [
                "tipo_gasto" => 'OTRA COSA DE PRUEBA',
                "valor_iva" => '00.000.000,00',
                "subtotal" => '00.000.000,00',
                "valor" => '00.000.000,00'
            ],
            [
                "tipo_gasto" => 'OTRA COSA DE PRUEBA',
                "valor_iva" => '00.000.000,00',
                "subtotal" => '00.000.000,00',
                "valor" => '00.000.000,00'
            ],
            [
                "tipo_gasto" => 'OTRA COSA DE PRUEBA',
                "valor_iva" => '00.000.000,00',
                "subtotal" => '00.000.000,00',
                "valor" => '00.000.000,00'
            ],
            [
                "tipo_gasto" => 'OTRA COSA DE PRUEBA',
                "valor_iva" => '00.000.000,00',
                "subtotal" => '00.000.000,00',
                "valor" => '00.000.000,00'
            ],
            [
                "tipo_gasto" => 'OTRA COSA DE PRUEBA',
                "valor_iva" => '00.000.000,00',
                "subtotal" => '00.000.000,00',
                "valor" => '00.000.000,00'
            ],
            [
                "tipo_gasto" => 'TOTAL',
                "valor_iva" => '569.491,00',
                "subtotal" => '5.540.840,00',
                "valor" => '5.875.384,00',
            ]

        ];


        return [
            'detalleEgresos' => $detalleEgresos

        ];
    }

    public function otrosIngresos()
    {

        $otrosIngresos = [
            [
                "descripcion" => 'APROVECHAMIENTOS',
                "valor" => '6.089,00'
            ],
            [
                "descripcion" => 'TRASLADOS DE FONDOS ENTRADA EFECTIVO',
                "valor" => '15.039.703,00'
            ],
            [
                "descripcion" => 'CUENTA POR PAGAR A TERCEROS',
                "valor" => '2000,00'
            ],
            [
                "descripcion" => 'OPERACIONES EFECTY',
                "valor" => '948.806,00'
            ],
            [
                "descripcion" => 'Total',
                "valor" => '15.994.798,00'
            ],
        ];


        return [
            'otrosIngresos' => $otrosIngresos

        ];
    }

    public function detalleContratoNuevo()
    {

        $detalleContratoNuevo = [

            [
                "descripcion" => 'ORO 18K ITALIANO',
                "gramos" => '5,06',
                "valor_articulos" => '825.000,00',
                "promedio" => '163.043,48'
            ],
            [
                "descripcion" => 'ORO 18K NACIONAL',
                "gramos" => '18,36',
                "valor_articulos" => '2.390.000,00',
                "promedio" => '130.174,29'
            ],
            [
                "descripcion" => 'OTROS ARTICULOS',
                "gramos" => '',
                "valor_articulos" => ',00',
                "promedio" => ''
            ],
            [
                "descripcion" => 'TOTAL',
                "gramos" => '23,42',
                "valor_articulos" => '3.215.000,00',
                "promedio" => '137.275,83'
            ]

        ];


        return [
            'detalleContratoNuevo' => $detalleContratoNuevo

        ];
    }

    public function detalleRetroventaContratos()
    {
        $detalleRetroventaContratos = [

            [
                "descripcion" => 'ORO 18K ITALIANO',
                "gramos" => '4,80',
                "valor_articulos" => '580.000,00',
                "promedio" => '120.833,33'
            ],
            [
                "descripcion" => 'ORO 18K NACIONAL',
                "gramos" => '11,18',
                "valor_articulos" => '1.440.000,00',
                "promedio" => '128.801,43'
            ],
            [
                "descripcion" => 'OTROS ARTICULOS',
                "gramos" => '',
                "valor_articulos" => ',00',
                "promedio" => ''
            ],
            [
                "descripcion" => 'TOTAL',
                "gramos" => '15,98',
                "valor_articulos" => '2.020.000,00',
                "promedio" => '126.408,01'
            ]
        ];

        return [
            'detalleRetroventaContratos' => $detalleRetroventaContratos

        ];
    }

    public function rangosFacturasDocumentos()
    {
        $rangosFacturasDocumentos = [

            [
                "column_name" => 'Rango de Contratos',
                "valor" => '26332/26335'
            ],
            [
                "column_name" => 'Factura de Venta',
                "valor" => 'EDEV1366/EDEV1366'
            ],
            [
                "column_name" => 'Facturas Resoluciones',
                "valor" => 'CDNR206/CDNR206'
            ],
            [
                "column_name" => 'Facturas Resoluciones',
                "valor" => 'EDER3614/EDER3618'
            ],
            [
                "column_name" => 'Facturas Prórrogas',
                "valor" => 'EDEP5055/EDEP5061'
            ]
        ];

        return [
            'rangosFacturasDocumentos' => $rangosFacturasDocumentos

        ];
    }
}
