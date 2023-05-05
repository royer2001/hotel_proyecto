<?php

use App\Http\Controllers\AlquilerController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ComprobanteController;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ReservaController;
use App\Models\Habitacion;
use App\Models\Pago;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resources('/alquiler',AlquilerController::class);
Route::resources('/categoria',CategoriaController::class);
Route::resources('/cliente',ClienteController::class);
Route::resources('/comprobante',ComprobanteController::class);
Route::resources('/habitacion',HabitacionController::class);
Route::resources('/pago',PagoController::class);
Route::resources('/producto',ProductoController::class);
Route::resources('/reserva',ReservaController::class);
Route::resources('/venta',VentaController::class);

