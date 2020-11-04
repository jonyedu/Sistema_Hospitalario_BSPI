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

    //Modulo
    Route::get('modulo/cargar_modulo_table', 'Modulos\Parametrizacion\Modulo\ModuloApiController@cargarModuloComboBox');
    Route::get('modulo/cargar_modulo_combo_box', 'Modulos\Parametrizacion\Modulo\ModuloApiController@cargarModuloComboBox');
    Route::post('modulo/modificar_modulo', 'Modulos\Parametrizacion\Modulo\ModuloApiController@modificarModulo');
    Route::post('modulo/guardar_modulo', 'Modulos\Parametrizacion\Modulo\ModuloApiController@guardarModulo');
    Route::delete('modulo/eliminar_modulo/{id}', 'Modulos\Parametrizacion\Modulo\ModuloApiController@eliminarModulo');

    //Submodulo
    Route::get('sub_modulo/cargar_sub_modulo_combo_box/{id}', 'Modulos\Parametrizacion\SubModulo\SubModuloApiController@cargarSubModuloComboBox');

});
