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

    /* SubModulo Usuarios */
    Route::namespace('Modulos\Parametrizacion\Usuarios')->prefix('usuarios')->group(function () {
        /* Route::get('cargar_modulo_combo_box', 'ModuloApiController@cargarModuloComboBox'); */
        /* Route::get('cargar_user_tabla', 'UsuariosApiController@cargarUserTable'); */
        /* Route::post('modificar_modulo', 'ModuloApiController@modificarModulo');
        Route::post('guardar_modulo', 'ModuloApiController@guardarModulo');
        Route::delete('eliminar_modulo/{id}', 'ModuloApiController@eliminarModulo'); */
    });

    /* SubModulo Modulo */
    Route::namespace('Modulos\Parametrizacion\Modulo')->prefix('modulo')->group(function () {
        Route::get('cargar_modulo_combo_box', 'ModuloApiController@cargarModuloComboBox');
        Route::get('cargar_modulo_table', 'ModuloApiController@cargarModuloComboBox');
        Route::post('modificar_modulo', 'ModuloApiController@modificarModulo');
        Route::post('guardar_modulo', 'ModuloApiController@guardarModulo');
        Route::delete('eliminar_modulo/{id}', 'ModuloApiController@eliminarModulo');
    });

    /* SubModulo Submodulo */
    Route::namespace('Modulos\Parametrizacion\SubModulo')->prefix('sub_modulo')->group(function () {
        Route::get('cargar_sub_modulo_combo_box/{id}', 'SubModuloApiController@cargarSubModuloComboBox');
        Route::get('cargar_sub_modulo_table', 'SubModuloApiController@cargarSubModuloTabla');
        Route::post('modificar_sub_modulo', 'SubModuloApiController@modificarSubModulo');
        Route::post('guardar_sub_modulo', 'SubModuloApiController@guardarSubModulo');
        Route::delete('eliminar_sub_modulo/{id}', 'SubModuloApiController@eliminarSubModulo');
    });
});
