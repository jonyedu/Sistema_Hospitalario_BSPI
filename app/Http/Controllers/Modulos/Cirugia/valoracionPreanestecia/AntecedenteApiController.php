<?php

namespace App\Http\Controllers\Modulos\Cirugia\valoracionPreanestecia;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Cirugia\valoracionPreanestecia\Antecedente;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AntecedenteApiController extends Controller
{
    /* Funcion para cargar el dato de la tabla Antecedente con la condicion del idSecCirPro */
    public function cargarAntecedenteCampo($idSecCirPro)
    {
        if ($idSecCirPro !== '' && isset($idSecCirPro)) {
            try {

                $antecedente = Antecedente::where('SecCirPro', $idSecCirPro)
                ->where('status', '1')
                ->first();
                return  response()->json(['antecedente' => $antecedente], 200);
            } catch (Exception $e) {
                return response()->json(['mensaje' => $e->getMessage()], 500);
            }
        } else {
            return response()->json(['mensaje' => "No Existe Datos"], 500);
        }
    }
    /*Funcion para guardar o modificar a la tabla antecedentes*/
    public function guardarModificarAntecedente(Request $request)
    {
        try {
            $user = Auth::user();
            Antecedente::UpdateOrCreate(
                [
                    'SecCirPro' => $request->input('frm_idCirugiaProgramada'),
                    'status' => '1',
                ],
                [
                    'quirurgico' => $request->input('frm_quirurgico'),
                    'descripcionQuirurgico' => $request->input('frm_descripcionQuirurgico'),
                    'traumatico' => $request->input('frm_traumatico'),
                    'descripcionTraumatico' => $request->input('frm_descripcionTraumatico'),
                    'alergia' => $request->input('frm_alergia'),
                    'alergiaValor' => $request->input('frm_alergiaValor'),
                    'tabaco' => $request->input('frm_tabaco'),
                    'cocaina' => $request->input('frm_cocaina'),
                    'marihuana' => $request->input('frm_marihuana'),
                    'otrosToxico' => $request->input('frm_otrosToxico'),
                    'cual_otrosToxico' => $request->input('frm_cual_otrosToxico'),
                    'g' => $request->input('frm_g'),
                    'p' => $request->input('frm_p'),
                    'a' => $request->input('frm_a'),
                    'c' => $request->input('frm_c'),
                    'fur' => $request->input('frm_fur'),
                    'familiar' => $request->input('frm_familiar'),
                    'cual_familiar' => $request->input('frm_cual_familiar'),
                    'esteroide' => $request->input('frm_esteroide'),
                    'aines' => $request->input('frm_aines'),
                    'ieca' => $request->input('frm_ieca'),
                    'inetropico' => $request->input('frm_inetropico'),
                    'anti_h2' => $request->input('frm_anti_h2'),
                    'asa' => $request->input('frm_asa'),
                    'antibiotico' => $request->input('frm_antibiotico'),
                    'betabloqueador' => $request->input('frm_betabloqueador'),
                    'diuretico' => $request->input('frm_diuretico'),
                    'anticoagulante' => $request->input('frm_anticoagulante'),
                    'calcioantagonista' => $request->input('frm_calcioantagonista'),
                    'acos' => $request->input('frm_acos'),
                    'anticolinesterasico' => $request->input('frm_anticolinesterasico'),
                    'otrasDroga' => $request->input('frm_otrasDroga'),
                    'cual_otrasDroga' => $request->input('frm_cual_otrasDroga'),
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
    /* Funcion para cambiar el status de la tabla antecedente */
    public function eliminarAntecedente($id)
    {
        try {
            if ($id !== '' && isset($id)) {
                $user = Auth::user();
                Antecedente::where('idAntecedente', $id)->update([
                    'usuario_modificacion' => $user->id,
                    'status' => '1'
                ]);
                return response()->json(['msg' => 'OK'], 200);
            } else {
                return response()->json(['mensaje' => 'El id de Antecedente es requerido'], 500);
            }
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}
