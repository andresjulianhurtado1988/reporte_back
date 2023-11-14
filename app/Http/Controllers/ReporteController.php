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



        return response()->json([

            'tiendas' => DB::table('tbl_tienda')
                ->select(
                    'nombre',
                    'direccion',
                    'telefono',
                    'correo_electronico',
                )->get(),
            'ciudades' => DB::table('tbl_ciudad')
                ->select('nombre', 'codigo_dane')
                ->where('id', '<', 8)
                ->get()

        ]);

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

        $fileName = "pdfDatos";

        // const datosFilter = {
        //     misTiendas: misTiendas,
        //     fechaIni: fechaIni,
        //     fechaFin: fechaFin,
        //   };

        //   $misTiendas = $params_array['misTiendas'];


        $pdf = Pdf::loadView('/pdfDatos', compact('fileName'));
        return $pdf->stream();

        // $data = Ideas::where('theme_id', $theme_id)->get();
        // $pdf = Pdf::loadView('/pdf_ideas', compact('data'));
        // return $pdf->stream();


    }
}
