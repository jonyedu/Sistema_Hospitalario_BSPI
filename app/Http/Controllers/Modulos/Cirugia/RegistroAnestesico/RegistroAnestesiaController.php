<?php

namespace App\Http\Controllers\Modulos\Cirugia\RegistroAnestesico;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Cirugia\RegistroAnestesico\RegistroAnestesia;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistroAnestesiaController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();
        $registroAnestesico = RegistroAnestesia::create(
            [
                'SecCirPro' => $request->input('cirugia_id'),
                'usu_created_update' => $user->id,
            ]
        );
        return response()->json(
            ['id' => $registroAnestesico->id],
            200
        );
    }

    public function modifcarRegistroAnestesia(Request $request)
    {
        try {
            $user = Auth::user();
            RegistroAnestesia::where('id', $request->input('frm_registro_anestesia_id'))->where('SecCirPro', $request->input('frm_cirugia_id'))->update([
                /* Tiempo */
                'duracion_anestesia' => $request->input('frm_descripcion'),
                'duracion_operacion' => $request->input('frm_name_system'),
                /* Tecnicas */
                //seccion 0
                'general'=> $request->input('general'),
                'sistem_abierto'=> $request->input('sistem_abierto'),
                'sistem_cerrado'=> $request->input('sistem_cerrado'),
                'sistem_semi_cerr'=> $request->input('sistem_semi_cerr'),
                'cinc_aparatos_usados'=> $request->input('cinc_aparatos_usados'),
                'vaiiven_aparatos_usados'=> $request->input('vaiiven_aparatos_usados'),
                'mascara'=> $request->input('mascara'),
                //seccion 1
                'oral_inte_traqueal'=> $request->input('oral_inte_traqueal'),
                'nasal_inte_traqueal'=> $request->input('nasal_inte_traqueal'),
                'rapido_inte_traqueal'=> $request->input('rapido_inte_traqueal'),
                'lenta_inte_traqueal'=> $request->input('lenta_inte_traqueal'),
                'turbo_inte_traqueal'=> $request->input('turbo_inte_traqueal'),
                'manguito_inflam_inte_traqueal'=> $request->input('manguito_inflam_inte_traqueal'),
                'taponamiento_inte_traqueal'=> $request->input('taponamiento_inte_traqueal'),
                'asist_topica_inte_traqueal'=> $request->input('asist_topica_inte_traqueal'),
                'asist_tranboral_inte_traqueal'=> $request->input('asist_tranboral_inte_traqueal'),
                //seccion 2
                'conductiva'=> $request->input('conductiva'),
                'asepsia_piel'=> $request->input('asepsia_piel'),
                'con'=> $request->input('con'),
                'habon'=> $request->input('habon'),
                'raquidea'=> $request->input('raquidea'),
                'epidural_caud'=> $request->input('epidural_caud'),
                //seccion 3
                'simple_altura_puncion'=> $request->input('simple_altura_puncion'),
                'continua_altura_puncion'=> $request->input('continua_altura_puncion'),
                //seccion 4
                'puncion_lat'=> $request->input('puncion_lat'),
                'linea_media'=> $request->input('linea_media'),
                //seccion 5
                'aguja'=> $request->input('aguja'),
                'nivel'=> $request->input('nivel'),
                'hiperbara'=> $request->input('hiperbara'),
                'id_tipo_posiciones'=> $request->input('id_tipo_posiciones'),
                /* Complicaciones Operatorias */
                'hipotension'=> $request->input('hipotension'),
                'arritmias'=> $request->input('arritmias'),
                'depresion_respiratoria'=> $request->input('depresion_respiratoria'),
                'perforacion_duramadre'=> $request->input('perforacion_duramadre'),
                'dificultad_intubacion'=> $request->input('dificultad_intubacion'),
                'nauses_vomitos'=> $request->input('nauses_vomitos'),
                'conductiva_insuficiente'=> $request->input('conductiva_insuficiente'),
                'laringo_espasmo'=> $request->input('laringo_espasmo'),
                'paro_cardiaco'=> $request->input('paro_cardiaco'),
                'ninguna'=> $request->input('ninguna'),
                'cambio_tecnica'=> $request->input('cambio_tecnica'),
                'otros_complicaciones'=> $request->input('otros_complicaciones'),
                /* Apagar */
                'min1'=> $request->input('min1'),
                'min5'=> $request->input('min5'),
                'min10'=> $request->input('min10'),
                'p_muerto'=> $request->input('p_muerto'),
                /* Tecnicas Especiales */
                'tecnicas_especiales'=> $request->input('tecnicas_especiales'),
                'conducido_a'=> $request->input('conducido_a'),
                'por'=> $request->input('por'),
                'hora'=> $request->input('hora'),

                'usu_created_update' => $user->id,
                'pcip' => $_SERVER["REMOTE_ADDR"],
                'status' => '1'
            ]);
            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}
