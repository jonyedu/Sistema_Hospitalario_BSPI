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
        Route::get('cargar_menu', 'ModuloApiController@cargarMenu');
        Route::get('cargar_modulo_table', 'ModuloApiController@cargarModuloTabla');



        Route::get('cargar_modulo_combo_box', 'ModuloApiController@cargarModuloComboBox');

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

    /* SubModulo Tipo Sangre */
    Route::namespace('Modulos\Parametrizacion\TipoSangre')->prefix('tipo_sangre')->group(function () {
        Route::get('cargar_tipo_sangre_combo_box', 'TipoSangreApiController@cargarTipoSangreComboBox');

    });

    /* SubModulo Diagnostico */
     Route::namespace('Modulos\Parametrizacion\Diagnostico')->prefix('diagnostico')->group(function () {
        Route::get('cargar_diagnostico_combo_box/{buscar}', 'DiagnosticoApiController@cargarDiagnosticoComboBox');
        Route::get('cargar_diagnostico_por_codigo/{id}', 'DiagnosticoApiController@cargarDiagnosticoPorCodigo');

    });

    /* SubModulo Tarifario */
    Route::namespace('Modulos\Parametrizacion\Tarifario')->prefix('tarifario')->group(function () {
        Route::get('consultar_tarifario/{descripcion}', 'TarifarioApiController@consultarTarifario');
    });

    /* SubModulo Servicio Medico */
    Route::namespace('Modulos\Parametrizacion\ServicioMedico')->prefix('servicio_medico')->group(function () {
        Route::get('cargar_servicio_medico_por_medico/{idServicioMedico}', 'ServicioMedicoApiController@cargarServicioMedicoPorMedico');
    });



    /* SubModulo Sala */
    Route::namespace('Modulos\Parametrizacion\Sala')->prefix('sala')->group(function () {
        Route::get('cargar_sala_combo_box', 'SalaApiController@cargarSalaComboBox');
        /* Route::get('cargar_sub_modulo_table', 'SubModuloApiController@cargarSubModuloTabla');
        Route::post('modificar_sub_modulo', 'SubModuloApiController@modificarSubModulo');
        Route::post('guardar_sub_modulo', 'SubModuloApiController@guardarSubModulo');
        Route::delete('eliminar_sub_modulo/{id}', 'SubModuloApiController@eliminarSubModulo'); */
    });
});
