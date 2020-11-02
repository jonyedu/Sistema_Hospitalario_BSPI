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


Route::group(['prefix' => 'modulos/parametrizacion', 'middleware' => ['auth:web'], 'verified'], function () {

    Route::get('modulo/cargar_modulo_combo_box', 'Modulos\Parametrizacion\Modulo\ModuloApiController@cargarModuloComboBox');
    Route::get('sub_modulo/cargar_sub_modulo_combo_box/{id}', 'Modulos\Parametrizacion\SubModulo\SubModuloApiController@cargarSubModuloComboBox');

});
