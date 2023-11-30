<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;
use App\Models\Ventas;

class PDFController extends Controller
{
    public function generatePDF()
    {

        $users = User::all();
        $users = $users->chunk(30);
        $detalleVentas = Ventas::all();

        $detalleVentas = $detalleVentas->chunk(15);

        $data = [

            'title' => 'Welcome to ItSolutionStuff.com',
            'users' => $users,
            'ventas' => $detalleVentas
        ];

        $pdf = PDF::loadView('myPDF', $data);


        return $pdf->download('itsolutionstuff.pdf');

    }
}
