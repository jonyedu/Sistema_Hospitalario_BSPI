<?php

namespace App\Http\Controllers\Modulos\Cirugia\valoracionPreanestecia;

use App\Http\Controllers\Controller;
use App\Http\Requests\Modulos\Cirugia\ValoracionPreanestesia\ParaclinicosRequest;
use App\Models\Modulos\Cirugia\valoracionPreanestecia\Paraclinico;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ParaclinicoApiController extends Controller
{
    public function validarCampos(ParaclinicosRequest $request)
    {
        try {
            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
    /* Funcion para cargar el dato de la tabla Examen Fisico con la condicion del idSecCirPro */
    public function cargarParaclinicoCampo($idSecCirPro)
    {
        if ($idSecCirPro !== '' && isset($idSecCirPro)) {
            try {
                $paraclinico = Paraclinico::where('SecCirPro', $idSecCirPro)
                ->with('tipoSangre')
                ->where('status', '1')
                ->first();
                return  response()->json(['paraclinico' => $paraclinico], 200);
            } catch (Exception $e) {
                return response()->json(['mensaje' => $e->getMessage()], 500);
            }
        } else {
            return response()->json(['mensaje' => "No Existe Datos"], 500);
        }
    }
    /*Funcion para guardar o modificar a la tabla ExamenFisico*/
    public function guardarModificarParaclinico(Request $request)
    {
        //return response()->json(['request' => $request->input()], 200);
        try {
            $user = Auth::user();
            Paraclinico::UpdateOrCreate(
                [
                    'SecCirPro' => $request->input('frm_idCirugiaProgramada'),
                    'status' => '1',
                ],
                [
                    'id_tipo_sangre' => $request->input('frm_id_tipo_sangre'),
                    'hb' => $request->input('frm_hb'),
                    'hb_valor' => $request->input('frm_hb_valor'),
                    'hcto' => $request->input('frm_hcto'),
                    'hcto_valor' => $request->input('frm_hcto_valor'),
                    'leucocito' => $request->input('frm_leucocito'),
                    'leucocito_valor' => $request->input('frm_leucocito_valor'),
                    'na' => $request->input('frm_na'),
                    'na_valor' => $request->input('frm_na_valor'),
                    'ci' => $request->input('frm_ci'),
                    'ci_valor' => $request->input('frm_ci_valor'),
                    'k' => $request->input('frm_k'),
                    'k_valor' => $request->input('frm_k_valor'),
                    'ca' => $request->input('frm_ca'),
                    'ca_valor' => $request->input('frm_ca_valor'),
                    'bun' => $request->input('frm_bun'),
                    'bun_valor' => $request->input('frm_bun_valor'),
                    'creati' => $request->input('frm_creati'),
                    'creati_valor' => $request->input('frm_creati_valor'),
                    'glicemia' => $request->input('frm_glicemia'),
                    'glicemia_valor' => $request->input('frm_glicemia_valor'),
                    'plaqueta' => $request->input('frm_plaqueta'),
                    'plaqueta_valor' => $request->input('frm_plaqueta_valor'),
                    'tp' => $request->input('frm_tp'),
                    'tp_valor' => $request->input('frm_tp_valor'),
                    'tpt' => $request->input('frm_tpt'),
                    'tpt_valor' => $request->input('frm_tpt_valor'),
                    'mg' => $request->input('frm_mg'),
                    'mg_valor' => $request->input('frm_mg_valor'),
                    'ekg' => $request->input('frm_ekg'),
                    'ecocardiograma' => $request->input('frm_ecocardiograma'),
                    'rxTorax' => $request->input('frm_rxTorax'),
                    'otros' => $request->input('frm_otros'),
                    'clasificacion_asa' => $request->input('frm_clasificacion_asa'),
                    'clasificacion_riesgo' => $request->input('frm_clasificacion_riesgo'),
                    'observacion' => $request->input('frm_observacion'),
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
    public function eliminarParaclinico($id)
    {
        try {
            if ($id !== '' && isset($id)) {
                $user = Auth::user();
                Paraclinico::where('idParaclinico', $id)->update([
                    'usuario_modificacion' => $user->id,
                    'status' => '1'
                ]);
                return response()->json(['msg' => 'OK'], 200);
            } else {
                return response()->json(['mensaje' => 'El id de Paraclinico es requerido'], 500);
            }
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}
