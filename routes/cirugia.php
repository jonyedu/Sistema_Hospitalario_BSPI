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


Route::group(['prefix' => 'modulos/cirugia/', 'middleware' => ['auth:web'], 'verified'], function () {
    //Modulo de Cirugia
    Route::post('valoracionPreanestecia/cargar_lista_cirugia_programadaPaciente', 'Modulos\Cirugia\valoracionPreanestecia\ValoracionPreanestesicaApiController@cargarListaCirugiaProgramadaPaciente');

    /* Revision por Sistema */
    //Cargar en los Campos
    Route::get('valoracionPreanestecia/cargar_revision_sistema_campo/{idSecCirPro}', 'Modulos\Cirugia\valoracionPreanestecia\RevisionSistemaApiController@cargarRevisionSistemaCampo');
    //Cargar Pdf Formulario
    Route::get('valoracionPreanestecia/cargar_pdf_formulario_valoracion_preanestesica/{idSecCirPro}', 'Modulos\Cirugia\valoracionPreanestecia\ValoracionPreanestesicaApiController@cargarPdfFormularioValoracionPreanestesica');
    //Guardar o Modificar
    Route::post('valoracionPreanestecia/guardar_modificar_revision_sistema', 'Modulos\Cirugia\valoracionPreanestecia\RevisionSistemaApiController@guardarModificarRevisionSistema');

    /* Antecedente */
    //Cargar en los Campos
    Route::get('valoracionPreanestecia/cargar_antecedente_campo/{idSecCirPro}', 'Modulos\Cirugia\valoracionPreanestecia\AntecedenteApiController@cargarAntecedenteCampo');
    //Guardar o Modificar
    Route::post('valoracionPreanestecia/guardar_modificar_antecedente', 'Modulos\Cirugia\valoracionPreanestecia\AntecedenteApiController@guardarModificarAntecedente');

    /* Examen Fisico */
    //Cargar en los Campos
    Route::get('valoracionPreanestecia/cargar_examen_fisico_campo/{idSecCirPro}', 'Modulos\Cirugia\valoracionPreanestecia\ExamenFisicoApiController@cargarExamenFisicoCampo');
    //Guardar o Modificar
    Route::post('valoracionPreanestecia/guardar_modificar_examen_fisico', 'Modulos\Cirugia\valoracionPreanestecia\ExamenFisicoApiController@guardarModificarExamenFisico');

    /* Paraclinico */
    //Cargar en los Campos
    Route::get('valoracionPreanestecia/cargar_paraclinico_campo/{idSecCirPro}', 'Modulos\Cirugia\valoracionPreanestecia\ParaclinicoApiController@cargarParaclinicoCampo');
    //Guardar o Modificar
    Route::post('valoracionPreanestecia/guardar_modificar_paraclinico', 'Modulos\Cirugia\valoracionPreanestecia\ParaclinicoApiController@guardarModificarParaclinico');

});
