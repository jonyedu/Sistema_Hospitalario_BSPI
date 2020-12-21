<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::group(['prefix' => 'modulos/admision', 'middleware' => ['auth:web'], 'verified'], function () {

    /* SubModulo Medico */
    Route::namespace('Modulos\Admision\Medico')->prefix('medico')->group(function () {
        //Modulo de Cirugia
        Route::get('cargar_medico_por_especializacion/{idEspecializacion}', 'MedicoApiController@cargarMedicoPorEspecializacion');
        Route::get('cargar_cirujano', 'MedicoApiController@cargarCirujano');
        Route::get('cargar_medico_all', 'MedicoApiController@cargarMedicoAll');
    });
});
