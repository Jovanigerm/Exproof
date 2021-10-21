<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedoresController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::name('reporte')->get('reporte',[ProveedoresController::class,'reporte']);
Route::name('detalle')->get('detalle/{idp}',[ProveedoresController::class,'detalle']);
Route::name('editar')->put('editar/{idp}',[ProveedoresController::class,'editar']);
Route::name('alta')->post('alta',[ProveedoresController::class,'alta']);
Route::name('borrar')->delete('borrar/{idp}',[ProveedoresController::class,'borrar']);

Route::name('estados')->get('estados',[ProveedoresController::class,'estados']);
Route::name('municipios')->get('municipios',[ProveedoresController::class,'municipios']);