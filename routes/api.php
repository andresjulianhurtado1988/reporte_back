<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\ConsolidadoController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/pruebaRuta', [ReporteController::class, 'pruebaRuta'])->name('pruebaRuta');

Route::post('/reportePdf', [ReporteController::class, 'reportePdf'])->name('reportePdf');
Route::post('/generarPdf', [ReporteController::class, 'generarPdf'])->name('generarPdf');
Route::post('/reportePdfConsolidado', [ConsolidadoController::class, 'reportePdfConsolidado'])->name('reportePdfConsolidado');
Route::post('/generarExcel', [ReporteController::class, 'generarExcel'])->name('generarExcel');



