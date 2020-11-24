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
        //Cargar Combobox Tipo Sangre
        Route::get('cargar_tipo_sangre_combo_box', 'ParaclinicoApiController@cargarTipoSangreComboBox');
        //Cargar en los Campos
        Route::get('cargar_paraclinico_campo/{idSecCirPro}', 'ParaclinicoApiController@cargarParaclinicoCampo');
        //Guardar o Modificar
        Route::post('guardar_modificar_paraclinico', 'ParaclinicoApiController@guardarModificarParaclinico');
    });

    /* SubModulo anestesia */
    Route::namespace('Modulos\Cirugia\RegistroAnestesico')->prefix('anestesia')->group(function () {
        Route::post('registro/post', 'RegistroAnestesiaController@store');
        Route::post('agentes/guardado/{registro_id}', 'DatosAgentesController@guardarDatosAgentes');
        Route::get('agentes/{tipo}', 'DatosAgentesController@obtenerAgenteAnestesiaJson');
        Route::post('registrar', 'DatosAgentesController@guardarDatosAgentes');
        //Route::post('registro_tipo_agente/post', 'TipoAgenteAnestesiaController@store');

        Route::get('cargar_tipo_posiciones_combo_box', 'AgenteAnestesiaController@cargarAgenteTipoPosicionComboBox');
        Route::post('guardar_droga_administrada', 'DrogasAdministradasController@guardarDrogaAdministradas');
        Route::post('modifcar_registro_anestesia', 'RegistroAnestesiaController@modifcarRegistroAnestesia');
        Route::post('guardar_registro_infusiones', 'RegistroInfusionesController@guardarRegistroInfusiones');
        Route::get('cargar_pdf_formulario_registro_anestesia/{idSecCirPro}', 'RegistroAnestesiaController@cargarPdfFormularioRegistroAnestesia');
        Route::get('cargar_sello/{codigo_usu}', 'RegistroAnestesiaController@cargarSello');
        Route::post('guardar_firma_atencion', 'RegistroAnestesiaController@guardarFirmaPorAtencion');
        Route::post('guardar_img_grafica', 'RegistroAnestesiaController@guardarImnGrafica');
        Route::post('guardar_modificar_agente_text', 'AgenteTextController@guardarModificarAgenteText');

    });

    /* SubModulo Tipo Agente */
    Route::namespace('Modulos\Cirugia\TipoAgente')->prefix('tipo_agente')->group(function () {
        Route::get('cargar_tipo_agente_table', 'TipoAgenteController@cargarTipoAgenteTabla');
        Route::post('guardar_archivo_tipo_agente', 'TipoAgenteController@guardarModificarArchivo');
        Route::post('modificar_tipo_agente', 'TipoAgenteController@modificarTipoAgente');
        Route::post('guardar_tipo_agente', 'TipoAgenteController@guardarTipoAgente');
        Route::delete('eliminar_tipo_agente/{id}', 'TipoAgenteController@eliminarTipoAgente');
    });

    /* SubModulo Tipo Posiciones */
    Route::namespace('Modulos\Cirugia\TipoPosiciones')->prefix('tipo_posiciones')->group(function () {
        Route::get('cargar_tipo_posiciones_table', 'TipoPosicionesController@cargarTipoPosicionesTabla');
        Route::post('guardar_archivo_tipo_posiciones', 'TipoPosicionesController@guardarModificarArchivo');
        Route::post('modificar_tipo_posiciones', 'TipoPosicionesController@modificarTipoPosiciones');
        Route::post('guardar_tipo_posiciones', 'TipoPosicionesController@guardarTipoPosiciones');
        Route::delete('eliminar_tipo_posiciones/{id}', 'TipoPosicionesController@eliminarTipoPosiciones');
    });

    /* Lista de Verificacion */
    Route::namespace('Modulos\Cirugia\ListaVerificacion')->prefix('lista_verificacion')->group(function () {
        Route::post('ListarValoracion','ListaValoracionController@create');
        Route::get('buscarpaciente/{id}','ListaValoracionController@show');
        Route::get('mostrarreporte/{id}','ListaValoracionController@mostrarr');

        // Route::get('cargar_tipo_posiciones_table', 'TipoPosicionesController@cargarTipoPosicionesTabla');
        // Route::post('guardar_archivo_tipo_posiciones', 'TipoPosicionesController@guardarModificarArchivo');
        // Route::post('modificar_tipo_posiciones', 'TipoPosicionesController@modificarTipoPosiciones');
        // Route::post('guardar_tipo_posiciones', 'TipoPosicionesController@guardarTipoPosiciones');
        // Route::delete('eliminar_tipo_posiciones/{id}', 'TipoPosicionesController@eliminarTipoPosiciones');
    });
});
