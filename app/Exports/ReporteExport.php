<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class ReporteExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     * 
     * 
     */

    // function __construct($ventas)
    // {
    //     $this->misDatos = $ventas;

    // }
    public function view(): View
    {

        $tiendas = DB::table('tbl_tienda')
            ->select(
                'nombre',
                'direccion',
                'telefono',
                'correo_electronico',
            )->get();


        return view('tiendas', [
            'data' => $tiendas
        ]);
    }
}
