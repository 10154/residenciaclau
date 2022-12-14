<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('inicio',App\Http\Controllers\DashboardController::class);
Route::resource('clientes',App\Http\Controllers\ClienteController::class);
//Route::get('/clientes/index',[ClienteController::class,'index']);
//Route::get('/clientes/create',[ClienteController::class,'create']);
//Route::get('/clientes/edit',[ClienteController::class,'edit']);
//Route::get('/clientes/destroy',[ClienteController::class,'destroy']);

Route::resource('publicaciones',App\Http\Controllers\PublicacionController::class);
Route::resource('calendarios',App\Http\Controllers\CalendarioController::class,);

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

Route::get('/dash', function () {return view('dash.index');})->name('dash');});
