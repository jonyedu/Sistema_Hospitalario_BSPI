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

        Route::get('validar_secCirPro/{secCirPro}', 'ValoracionPreanestesicaApiController@validarSecCirPro');
        Route::post('cargar_lista_cirugia_programadaPaciente', 'ValoracionPreanestesicaApiController@cargarListaCirugiaProgramadaPaciente');

        /* Revision por Sistema */
        Route::get('cargar_revision_sistema_campo/{idSecCirPro}', 'RevisionSistemaApiController@cargarRevisionSistemaCampo');
        Route::get('cargar_pdf_formulario_valoracion_preanestesica/{idSecCirPro}', 'ValoracionPreanestesicaApiController@cargarPdfFormularioValoracionPreanestesica');
        Route::post('guardar_modificar_revision_sistema', 'RevisionSistemaApiController@guardarModificarRevisionSistema');

        /* Antecedente */
        Route::get('cargar_antecedente_campo/{idSecCirPro}', 'AntecedenteApiController@cargarAntecedenteCampo');
        Route::post('guardar_modificar_antecedente', 'AntecedenteApiController@guardarModificarAntecedente');

        /* Examen Fisico */
        Route::get('cargar_examen_fisico_campo/{idSecCirPro}', 'ExamenFisicoApiController@cargarExamenFisicoCampo');
        Route::post('guardar_modificar_examen_fisico', 'ExamenFisicoApiController@guardarModificarExamenFisico');

        /* Paraclinico */
        Route::get('cargar_paraclinico_campo/{idSecCirPro}', 'ParaclinicoApiController@cargarParaclinicoCampo');
        Route::post('guardar_modificar_paraclinico', 'ParaclinicoApiController@guardarModificarParaclinico');
    });

    /* SubModulo registro de tiempo */
    Route::namespace('Modulos\Cirugia\RegistroTiempo')->prefix('registro_tiempo')->group(function () {
        Route::get('cargar_registro_tiempo_por_secCirPro/{id_cirugia_programada}', 'RegistroTiempoApiController@cargarRegistroTiempoPorSecCirPro');
        Route::get('validar_secCirPro/{secCirPro}', 'RegistroTiempoApiController@validarSecCirPro');
        Route::post('guardar_registro_tiempo', 'RegistroTiempoApiController@guardarRegistroTiempo');
        Route::post('suspender_registro_tiempo', 'RegistroTiempoApiController@suspenderRegistroTiempo');

    });

    /* SubModulo anestesia */
    Route::namespace('Modulos\Cirugia\RegistroAnestesico')->prefix('anestesia')->group(function () {
        Route::post('registro/post', 'RegistroAnestesiaController@store');
        Route::post('agentes/guardado', 'DatosAgentesController@guardarDatosAgentes');
        Route::get('agentes/{tipo}', 'DatosAgentesController@obtenerAgenteAnestesiaJson');
        Route::post('registrar', 'DatosAgentesController@guardarDatosAgentes');
        //Route::post('registro_tipo_agente/post', 'TipoAgenteAnestesiaController@store');

        Route::get('validar_secCirPro/{secCirPro}', 'RegistroAnestesiaController@validarSecCirPro');
        Route::get('consultar_id_agente/{id}', 'DatosAgentesController@consultarIdAgente');
        Route::get('cargar_tipo_posiciones_combo_box', 'AgenteAnestesiaController@cargarAgenteTipoPosicionComboBox');
        Route::post('guardar_datos_registro', 'DatosRegistroController@guardarDatosRegistro');
        Route::post('guardar_droga_administrada', 'DrogasAdministradasController@guardarDrogaAdministradas');
        Route::post('modifcar_registro_anestesia', 'RegistroAnestesiaController@modifcarRegistroAnestesia');
        Route::post('guardar_registro_infusiones', 'RegistroInfusionesController@guardarRegistroInfusiones');
        Route::get('cargar_pdf_formulario_registro_anestesia/{idSecCirPro}', 'RegistroAnestesiaController@cargarPdfFormularioRegistroAnestesia');
        Route::get('cargar_sello/{id_user}', 'RegistroAnestesiaController@cargarSello');
        Route::post('guardar_firma_atencion', 'RegistroAnestesiaController@guardarFirmaPorAtencion2');
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
        Route::get('mostrarreporte/{id}','ListaValoracionController@mostrar');

        // Route::get('cargar_tipo_posiciones_table', 'TipoPosicionesController@cargarTipoPosicionesTabla');
        // Route::post('guardar_archivo_tipo_posiciones', 'TipoPosicionesController@guardarModificarArchivo');
        // Route::post('modificar_tipo_posiciones', 'TipoPosicionesController@modificarTipoPosiciones');
        // Route::post('guardar_tipo_posiciones', 'TipoPosicionesController@guardarTipoPosiciones');
        // Route::delete('eliminar_tipo_posiciones/{id}', 'TipoPosicionesController@eliminarTipoPosiciones');
    });
});
