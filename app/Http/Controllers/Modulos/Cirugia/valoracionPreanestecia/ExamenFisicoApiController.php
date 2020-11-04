<?php

namespace App\Http\Controllers\Modulos\Cirugia\valoracionPreanestecia;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Cirugia\valoracionPreanestecia\ExamenFisico;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamenFisicoApiController extends Controller
{
    /* Funcion para cargar el dato de la tabla Examen Fisico con la condicion del idSecCirPro */
    public function cargarExamenFisicoCampo($idSecCirPro)
    {
        if ($idSecCirPro !== '' && isset($idSecCirPro)) {
            try {
                $examenFisico = ExamenFisico::where('SecCirPro', $idSecCirPro)
                ->where('status', '1')
                ->first();
                return  response()->json(['examenFisico' => $examenFisico], 200);
            } catch (Exception $e) {
                return response()->json(['mensaje' => $e->getMessage()], 500);
            }
        } else {
            return response()->json(['mensaje' => "No Existe Datos"], 500);
        }
    }
    /*Funcion para guardar o modificar a la tabla ExamenFisico*/
    public function guardarModificarExamenFisico(Request $request)
    {
        try {
            $user = Auth::user();
            ExamenFisico::UpdateOrCreate(
                [
                    'SecCirPro' => $request->input('frm_idCirugiaProgramada'),
                    'status' => '1',
                ],
                [
                    'pa' => $request->input('frm_pa'),
                    'fc' => $request->input('frm_fc'),
                    'peso' => $request->input('frm_peso'),
                    'talla' => $request->input('frm_talla'),
                    'bEstadoGeneral' => $request->input('frm_bEstadoGeneral'),
                    'rEstadoGeneral' => $request->input('frm_rEstadoGeneral'),
                    'mEstadoGeneral' => $request->input('frm_mEstadoGeneral'),
                    'cuelloCorto' => $request->input('frm_cuelloCorto'),
                    'dmt' => $request->input('frm_dmt'),
                    'cmCuelloCorto' => $request->input('frm_cmCuelloCorto'),
                    'bMovilidadCuello' => $request->input('frm_bMovilidadCuello'),
                    'rMovilidadCuello' => $request->input('frm_rMovilidadCuello'),
                    'mMovilidadCuello' => $request->input('frm_mMovilidadCuello'),
                    'clase1' => $request->input('frm_clase1'),
                    'clase2' => $request->input('frm_clase2'),
                    'clase3' => $request->input('frm_clase3'),
                    'clase4' => $request->input('frm_clase4'),
                    'ingurgitacionYugular' => $request->input('frm_ingurgitacionYugular'),
                    'cmBocaAperturaOral' => $request->input('frm_cmBocaAperturaOral'),
                    'bDentadura' => $request->input('frm_bDentadura'),
                    'rDentadura' => $request->input('frm_rDentadura'),
                    'mDentadura' => $request->input('frm_mDentadura'),
                    'edentulo' => $request->input('frm_edentulo'),
                    'protesis' => $request->input('frm_protesis'),
                    'cardiovascular' => $request->input('frm_cardiovascular'),
                    'respiratorio' => $request->input('frm_respiratorio'),
                    'abdomen' => $request->input('frm_abdomen'),
                    'extremidades' => $request->input('frm_extremidades'),
                    'puntuacionNeurologico' => $request->input('frm_puntuacionNeurologico'),
                    'usu_created_update' => $user->id,
                    'pcip' => $_SERVER["REMOTE_ADDR"],
                    'status' => '1'
                ]
            );
            return response()->json(['msg' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
    /* Funcion para cambiar el status de la tabla ExamenFisico */
    public function eliminarExamenFisico($id)
    {
        try {
            if ($id !== '' && isset($id)) {
                $user = Auth::user();
                ExamenFisico::where('idExamenFisico', $id)->update([
                    'usuario_modificacion' => $user->id,
                    'status' => '1'
                ]);
                return response()->json(['msg' => 'OK'], 200);
            } else {
                return response()->json(['mensaje' => 'El id de Examen Físico es requerido'], 500);
            }
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}