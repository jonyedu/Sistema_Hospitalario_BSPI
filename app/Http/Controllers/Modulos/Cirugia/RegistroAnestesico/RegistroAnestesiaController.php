<?php

namespace App\Http\Controllers\Modulos\Cirugia\RegistroAnestesico;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Admision\Medico\Medico;
use App\Models\Modulos\Cirugia\RegistroAnestesico\RegistroAnestesia;
use App\Models\Modulos\Cirugia\CirugiaProgramadas;
use App\Models\Modulos\Imagenes\FirmasPorAtencion;
use App\Models\Modulos\Imagenes\GraficaPorCirugia;
use App\Models\Modulos\Cirugia\RegistroAnestesico\DatosRegistro;
use App\Models\User;

use App\Models\Modulos\Parametrizacion\Tarifario\TarifarioProcedimiento;
use App\Models\Modulos\Parametrizacion\Tarifario\TarifarioMedicina;
use App\Models\Modulos\Parametrizacion\Tarifario\TarifarioCirugia;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use DateTime;
use PhpParser\Builder\Function_;

class RegistroAnestesiaController extends Controller
{
    public function cargarSello($id_medico)
    {
        try {
            $sello = Medico::where('id', $id_medico)
                ->with('medicoSellos')
                ->first();
            //$grafica = GraficaPorCirugia::where('SecCirPro', 1)->first();
            return  response()->json(['sello' => $sello], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
    public function guardarFirmaPorAtencion(Request $request)
    {
        try {
            $user = Auth::user();
            $firma = convertBase64ToBinary($request->input('imgFirma'));
            FirmasPorAtencion::create([
                'tipo_servicio' => 4,
                'id_atencion' => $request->input('registro_anestesia_id'),
                'id_visita' => 0,
                'id_tipo_documento' => 12,
                'fecha_atencion' => date("Y-m-d H:i:s"),
                'firma' => $firma,
                'status' => '1',
                'usuario_ingreso' => $user->id,
                'fecha_ingreso' => date("Y-m-d H:i:s"),
                'pcname' => $_SERVER["REMOTE_ADDR"]
            ]);
            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }

    public function guardarImnGrafica(Request $request)
    {
        try {
            $user = Auth::user();
            $grafica = addslashes(file_get_contents($request->input('imgGrafica')));
            $grafica = convertBase64ToBinary($request->input('imgGrafica'));
            GraficaPorCirugia::create([
                'SecCirPro' => $request->input('cirugia_id'),
                'registro_anestesia_id' => $request->input('registro_anestesia_id'),
                'grafica' => $grafica,
                'usu_created_update' => $user->id,
                'pcip' => $_SERVER["REMOTE_ADDR"],
                'status' => '1'
            ]);
            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $cirugia_id = $request->input('cirugia_id');
        $registro_anestesia_id = $request->input('registro_anestesia_id');

        $idRegistroAnestesico = RegistroAnestesia::where('SecCirPro', $cirugia_id)
            ->where('id', $registro_anestesia_id)
            ->with(['datoAgente' => function ($i) {
                $i->where('indice_hora', 4);
            }])
            ->first();

        if ($idRegistroAnestesico == null) {
            $registroAnestesico = RegistroAnestesia::create(
                [
                    'SecCirPro' => $request->input('cirugia_id'),
                    'usu_created_update' => $user->id,
                    'status' => 1,
                ]
            );
        } else {
        }
        $registroAnestesico = RegistroAnestesia::create(
            [
                'SecCirPro' => $request->input('cirugia_id'),
                'usu_created_update' => $user->id,
                'status' => 1,
            ]
        );
        return response()->json(
            ['id' => $registroAnestesico->id],
            200
        );
    }

    public function modifcarRegistroAnestesia(Request $request)
    {
        //return response()->json($request->input());
        try {
            $user = Auth::user();
            RegistroAnestesia::where('id', $request->input('registro_anestesia_id'))->where('SecCirPro', $request->input('cirugia_id'))->update([
                /* Tiempo */
                'duracion_anestesia' => $request->input('fchaDuracionAnestecia'),
                'duracion_operacion' => $request->input('fchaDuracionOperacion'),
                /* Tecnicas */
                //seccion 0
                'general' => $request->input('general'),
                'sistem_abierto' => $request->input('sistem_abierto'),
                'sistem_cerrado' => $request->input('sistem_cerrado'),
                'sistem_semi_cerr' => $request->input('sistem_semi_cerr'),
                'cinc_aparatos_usados' => $request->input('cinc_aparatos_usados'),
                'vaiiven_aparatos_usados' => $request->input('vaiiven_aparatos_usados'),
                'mascara' => $request->input('mascara'),
                //seccion 1
                'oral_inte_traqueal' => $request->input('oral_inte_traqueal'),
                'nasal_inte_traqueal' => $request->input('nasal_inte_traqueal'),
                'rapido_inte_traqueal' => $request->input('rapido_inte_traqueal'),
                'lenta_inte_traqueal' => $request->input('lenta_inte_traqueal'),
                'turbo_inte_traqueal' => $request->input('turbo_inte_traqueal'),
                'manguito_inflam_inte_traqueal' => $request->input('manguito_inflam_inte_traqueal'),
                'taponamiento_inte_traqueal' => $request->input('taponamiento_inte_traqueal'),
                'asist_topica_inte_traqueal' => $request->input('asist_topica_inte_traqueal'),
                'asist_tranboral_inte_traqueal' => $request->input('asist_tranboral_inte_traqueal'),
                //seccion 2
                'conductiva' => $request->input('conductiva'),
                'asepsia_piel' => $request->input('asepsia_piel'),
                'con' => $request->input('con'),
                'habon' => $request->input('habon'),
                'raquidea' => $request->input('raquidea'),
                'epidural_caud' => $request->input('epidural_caud'),
                //seccion 3
                'simple_altura_puncion' => $request->input('simple_altura_puncion'),
                'continua_altura_puncion' => $request->input('continua_altura_puncion'),
                'altura_puncion' => $request->input('altura_puncion'),
                //seccion 4
                'puncion_lat' => $request->input('puncion_lat'),
                'linea_media' => $request->input('linea_media'),
                //seccion 5
                'aguja' => $request->input('aguja'),
                'nivel' => $request->input('nivel'),
                'hiperbara' => $request->input('hiperbara'),
                'id_tipo_posiciones' => $request->input('id_tipo_posiciones'),
                /* Complicaciones Operatorias */
                'hipotension' => $request->input('hipotension'),
                'arritmias' => $request->input('arritmias'),
                'depresion_respiratoria' => $request->input('depresion_respiratoria'),
                'perforacion_duramadre' => $request->input('perforacion_duramadre'),
                'dificultad_intubacion' => $request->input('dificultad_intubacion'),
                'nauses_vomitos' => $request->input('nauses_vomitos'),
                'conductiva_insuficiente' => $request->input('conductiva_insuficiente'),
                'laringo_espasmo' => $request->input('laringo_espasmo'),
                'paro_cardiaco' => $request->input('paro_cardiaco'),
                'ninguna' => $request->input('ninguna'),
                'cambio_tecnica' => $request->input('cambio_tecnica'),
                'otros_complicaciones' => $request->input('otros_complicaciones'),
                'comentario' => $request->input('comentario'),
                /* Hemorragia */
                'hemorragia' => $request->input('hemorragia'),
                /* Apagar */
                'min1' => $request->input('min1'),
                'min5' => $request->input('min5'),
                'min10' => $request->input('min10'),
                'p_muerto' => $request->input('p_muerto'),
                /* Tecnicas Especiales */
                'tecnicas_especiales' => $request->input('tecnicas_especiales'),
                'conducido_a' => $request->input('id_sala'),
                'por' => $request->input('id_medico'),
                'hora' => $request->input('hora'),

                'usu_created_update' => $user->id,
                'pcip' => $_SERVER["REMOTE_ADDR"],
                'status' => '1'
            ]);
            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }

    public function cargarPdfFormularioRegistroAnestesia($idSecCirPro)
    {
        if ($idSecCirPro !== '' && isset($idSecCirPro)) {
            try {

                // CARGA DATOS DE EL REGISTRO DE ANESTESIA

                 $nombreArchivo = "FormularioValoracionPreanestesica.pdf";
                 $datosPaciente = [];
                 $datosprocedimiento= [];
                 $id_registro_anestesia = 34;

                $datosValoracionPreanestesica = RegistroAnestesia::where('SecCirPro', $idSecCirPro)
                    ->where('status', '1')
                    ->with('drogaAdministradaRpt','graficoCirugia', 'regitroInfunsionRpt.infusionNameRpt','tipoPosicion')
                    ->first();

                 //FINALIZA CARGA DATOS DE EL REGISTRO DE ANESTESIA
 
                
               //$id_registro_anestesia = $datosValoracionPreanestesica->id;
               $datosprocedimiento = DatosRegistro::where('registro_anestesia_id', $id_registro_anestesia)
               ->first();
                   
            
               $TarifarioProcedimiento = TarifarioProcedimiento::select('codigo', 'descripcion')->where('codigo',$datosprocedimiento->id_operacion_realizada);
               $TarifarioCirugua = TarifarioCirugia::select('codigo', 'descripcion')->where('codigo',$datosprocedimiento->id_operacion_realizada)
                   ->union($TarifarioProcedimiento);
               $TarifarioMedicina = TarifarioMedicina::select('codigo', 'descripcion')->where('codigo',$datosprocedimiento->id_operacion_realizada)
                   //  ->with('pacienteLista','pacienteHospitalizacion') 
                   ->union($TarifarioCirugua)
                   ->first();
                


                         $id_registro_anestesia =$datosValoracionPreanestesica->id;



                $datosPaciente = DatosRegistro::where('registro_anestesia_id', $id_registro_anestesia)
                ->with('graficoFirmaMedico','cirujano','Ayudante','Ayudante2','Instrumentrista','DiagnosticoPost','DiagnosticoPre','Anestesiologo')
                ->first();


                $pdf = PDF::loadView('reports.pdf.formulario-registro-anestesia',
                ['datosValoracionPreanestesica' => $datosValoracionPreanestesica,
                'datosPaciente' => $datosPaciente,
                'Tarifario' => $TarifarioMedicina]);
                 return $pdf->stream($nombreArchivo);

                // return  response()->json(['datosValoracionPreanestesica' => $datosValoracionPreanestesica,
                // 'datosPaciente' => $datosPaciente,
                // 'Tarifario' => $TarifarioMedicina], 200);
            } catch (Exception $e) {
                return response()->json(['mensaje' => $e->getMessage()], 500);
            }
        } else {
            return response()->json(['mensaje' => "No Existe Datos"], 500);
        }
    }

    function calculaEdad($fechanacimiento)
    {
        $fecha_naci = new DateTime($fechanacimiento);
        $dateFormat = $fecha_naci->format("d/m/Y");
        list($dia, $mes, $ano) = explode("/", $dateFormat);
        $ano_diferencia  = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia   = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0)
            $ano_diferencia--;
        return $ano_diferencia;
    }
    function consultarTarifario($descripcion)
    {

        try {
            $TarifarioProcedimiento = TarifarioProcedimiento::select('codigo', 'descripcion')->where('descripcion', 'like', "%$descripcion%");
            $TarifarioCirugua = TarifarioCirugia::select('codigo', 'descripcion')->where('descripcion', 'like', "%$descripcion%")
                ->union($TarifarioProcedimiento);
            $TarifarioMedicina = TarifarioMedicina::select('codigo', 'descripcion')->where('descripcion', 'like', "%$descripcion%")
                //  ->with('pacienteLista','pacienteHospitalizacion')
                ->union($TarifarioCirugua)
                ->get();


            return  response()->json(['tarifariomedicina' => $TarifarioMedicina], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}
