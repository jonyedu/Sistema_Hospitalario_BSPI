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


Route::group(['prefix' => 'modulos/cirugia', 'middleware' => ['auth:web'], 'verified'], function () {

    /* SubModulo valoracionPreanestecia */
    Route::namespace('Modulos\Cirugia\valoracionPreanestecia')->prefix('valoracionPreanestecia')->group(function () {
        //Modulo de Cirugia
        Route::post('cargar_lista_cirugia_programadaPaciente', 'ValoracionPreanestesicaApiController@cargarListaCirugiaProgramadaPaciente');

        /* Revision por Sistema */
        //Cargar en los Campos
        Route::get('cargar_revision_sistema_campo/{idSecCirPro}', 'RevisionSistemaApiController@cargarRevisionSistemaCampo');
        //Cargar Pdf Formulario
        Route::get('cargar_pdf_formulario_valoracion_preanestesica/{idSecCirPro}', 'ValoracionPreanestesicaApiController@cargarPdfFormularioValoracionPreanestesica');
        //Guardar o Modificar
        Route::post('guardar_modificar_revision_sistema', 'RevisionSistemaApiController@guardarModificarRevisionSistema');

        /* Antecedente */
        //Cargar en los Campos
        Route::get('cargar_antecedente_campo/{idSecCirPro}', 'AntecedenteApiController@cargarAntecedenteCampo');
        //Guardar o Modificar
        Route::post('guardar_modificar_antecedente', 'AntecedenteApiController@guardarModificarAntecedente');

        /* Examen Fisico */
        //Cargar en los Campos
        Route::get('cargar_examen_fisico_campo/{idSecCirPro}', 'ExamenFisicoApiController@cargarExamenFisicoCampo');
        //Guardar o Modificar
        Route::post('guardar_modificar_examen_fisico', 'ExamenFisicoApiController@guardarModificarExamenFisico');

        /* Paraclinico */
        //Cargar en los Campos
        Route::get('cargar_paraclinico_campo/{idSecCirPro}', 'ParaclinicoApiController@cargarParaclinicoCampo');
        //Guardar o Modificar
        Route::post('guardar_modificar_paraclinico', 'ParaclinicoApiController@guardarModificarParaclinico');
    });

    /* SubModulo anestesia */
    Route::namespace('Modulos\Cirugia\RegistroAnestesico')->prefix('anestesia')->group(function () {
        Route::get('agentes/{tipo}', 'DatosAgentesController@obtenerAgenteAnestesiaJson');
        Route::post('agentes/guardado/{registro_id}', 'DatosAgentesController@guardarDatosAgentes');
        Route::post('registrar', 'DatosAgentesController@guardarDatosAgentes');
        Route::post('registro/post', 'RegistroAnestesiaController@store');
        Route::post('registro_tipo_agente/post', 'TipoAgenteAnestesiaController@store');
    });

    /* SubModulo Tipo Agente */
    Route::namespace('Modulos\Cirugia\TipoAgente')->prefix('tipo_agente')->group(function () {
        Route::get('cargar_tipo_agente_table', 'TipoAgenteController@cargarTipoAgenteTabla');
        Route::post('modificar_tipo_agente', 'TipoAgenteController@modificarTipoAgente');
        Route::post('guardar_tipo_agente', 'TipoAgenteController@guardarTipoAgente');
        Route::delete('eliminar_tipo_agente/{id}', 'TipoAgenteController@eliminarTipoAgente');
    });

    /* SubModulo Tipo Posiciones */
    Route::namespace('Modulos\Cirugia\TipoPosiciones')->prefix('tipo_posiciones')->group(function () {
        Route::get('cargar_tipo_posiciones_table', 'TipoPosicionesController@cargarTipoPosicionesTabla');
        Route::post('modificar_tipo_posiciones', 'TipoPosicionesController@modificarTipoPosiciones');
        Route::post('guardar_tipo_posiciones', 'TipoPosicionesController@guardarTipoPosiciones');
        Route::delete('eliminar_tipo_posiciones/{id}', 'TipoPosicionesController@eliminarTipoPosiciones');
    });
});
