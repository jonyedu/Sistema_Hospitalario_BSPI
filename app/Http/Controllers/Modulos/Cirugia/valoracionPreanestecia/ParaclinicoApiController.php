<?php

namespace App\Http\Controllers\Modulos\Cirugia\valoracionPreanestecia;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Cirugia\valoracionPreanestecia\Paraclinico;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParaclinicoApiController extends Controller
{
    /* Funcion para cargar el dato de la tabla Examen Fisico con la condicion del idSecCirPro */
    public function cargarParaclinicoCampo($idSecCirPro)
    {
        if ($idSecCirPro !== '' && isset($idSecCirPro)) {
            try {
                $paraclinico = Paraclinico::where('SecCirPro', $idSecCirPro)
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
        try {
            $user = Auth::user();
            Paraclinico::UpdateOrCreate(
                [
                    'SecCirPro' => $request->input('frm_idCirugiaProgramada'),
                    'status' => '1',
                ],
                [
                    'hb' => $request->input('frm_hb'),
                    'hcto' => $request->input('frm_hcto'),
                    'leucocito' => $request->input('frm_leucocito'),
                    'na' => $request->input('frm_na'),
                    'ci' => $request->input('frm_ci'),
                    'k' => $request->input('frm_k'),
                    'ca' => $request->input('frm_ca'),
                    'bun' => $request->input('frm_bun'),
                    'creati' => $request->input('frm_creati'),
                    'glicemia' => $request->input('frm_glicemia'),
                    'plaqueta' => $request->input('frm_plaqueta'),
                    'tp' => $request->input('frm_tp'),
                    'tpt' => $request->input('frm_tpt'),
                    'mg' => $request->input('frm_mg'),
                    'ekg' => $request->input('frm_ekg'),
                    'ecocardiograma' => $request->input('frm_ecocardiograma'),
                    'rxTorax' => $request->input('frm_rxTorax'),
                    'asa1' => $request->input('frm_asa1'),
                    'asa2' => $request->input('frm_asa2'),
                    'asa3' => $request->input('frm_asa3'),
                    'asa4' => $request->input('frm_asa4'),
                    'asa5' => $request->input('frm_asa5'),
                    'u' => $request->input('frm_u'),
                    'categoria1' => $request->input('frm_categoria1'),
                    'categoria2' => $request->input('frm_categoria2'),
                    'categoria3' => $request->input('frm_categoria3'),
                    'categoria4' => $request->input('frm_categoria4'),
                    'categoria5' => $request->input('frm_categoria5'),
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
