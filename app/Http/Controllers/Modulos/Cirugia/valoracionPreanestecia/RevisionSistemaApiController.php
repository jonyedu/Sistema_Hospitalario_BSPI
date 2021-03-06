<?php

namespace App\Http\Controllers\Modulos\Cirugia\valoracionPreanestecia;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Cirugia\valoracionPreanestecia\RevisionSistema;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RevisionSistemaApiController extends Controller
{
    /* Funcion para cargar el dato de la tabla Examen Fisico con la condicion del idSecCirPro */
    public function cargarRevisionSistemaCampo($idSecCirPro)
    {
        if ($idSecCirPro !== '' && isset($idSecCirPro)) {
            try {
                $revisionSistema = RevisionSistema::where('SecCirPro', $idSecCirPro)
                    ->where('status', '1')
                    ->first();
                return  response()->json(['revisionSistema' => $revisionSistema], 200);
            } catch (Exception $e) {
                return response()->json(['mensaje' => $e->getMessage()], 500);
            }
        } else {
            return response()->json(['mensaje' => "No Existe Datos"], 500);
        }
    }
    /*Funcion para guardar o modificar a la tabla ExamenFisico*/
    public function guardarModificarRevisionSistema(Request $request)
    {
        try {
            $id = 0;
            $user = Auth::user();
            $revisionSistema =  RevisionSistema::UpdateOrCreate(
                [
                    'SecCirPro' => $request->input('frm_idCirugiaProgramada'),
                    'status' => '1',
                ],
                [
                    'SecCirPro' => $request->input('frm_idCirugiaProgramada'),
                    'hipertension' => $request->input('frm_hipertension'),
                    'enfCoronaria' => $request->input('frm_enfCoronaria'),
                    'arritmias' => $request->input('frm_arritmias'),
                    'otrosCardiovascular' => $request->input('frm_otrosCardiovascular'),
                    'otrosCardiovascularValor' => $request->input('frm_otrosCardiovascularValor'),
                    'enfValvular' => $request->input('frm_enfValvular'),
                    'varices' => $request->input('frm_varices'),
                    'claudicacion' => $request->input('frm_claudicacion'),
                    'epoc' => $request->input('frm_epoc'),
                    'asma' => $request->input('frm_asma'),
                    'tbc' => $request->input('frm_tbc'),
                    'otrosRespiratorio' => $request->input('frm_otrosRespiratorio'),
                    'otrosRespiratorioValor' => $request->input('frm_otrosRespiratorioValor'),
                    'convulsiones' => $request->input('frm_convulsiones'),
                    'ecv' => $request->input('frm_ecv'),
                    'meningitis' => $request->input('frm_meningitis'),
                    'enfMental' => $request->input('frm_enfMental'),
                    'otrosNeurologico' => $request->input('frm_otrosNeurologico'),
                    'otrosNeurologicoValor' => $request->input('frm_otrosNeurologicoValor'),
                    'ira' => $request->input('frm_ira'),
                    'infeccionUnitaria' => $request->input('frm_infeccionUnitaria'),
                    'irc' => $request->input('frm_irc'),
                    'otrosNefrologicos' => $request->input('frm_otrosNefrologicos'),
                    'otrosNefrologicosValor' => $request->input('frm_otrosNefrologicosValor'),
                    'ulcera' => $request->input('frm_ulcera'),
                    'estomagoLleno' => $request->input('frm_estomagoLleno'),
                    'otrosGastrointestinal' => $request->input('frm_otrosGastrointestinal'),
                    'otrosGastrointestinalValor' => $request->input('frm_otrosGastrointestinalValor'),
                    'diabetes' => $request->input('frm_diabetes'),
                    'hipertiroidismo' => $request->input('frm_hipertiroidismo'),
                    'obecidad' => $request->input('frm_obecidad'),
                    'otrosSistemaEndocrima' => $request->input('frm_otrosSistemaEndocrima'),
                    'otrosSistemaEndocrimaValor' => $request->input('frm_otrosSistemaEndocrimaValor'),
                    'usu_created_update' => $user->id,
                    'pcip' => $_SERVER["REMOTE_ADDR"],
                    'status' => '1'
                ]
            );
            if (is_object($revisionSistema)) {
                $id = $revisionSistema->idRevisionSistema;
            }
            return response()->json(['msg' => 'OK', 'value' => $id], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
    /* Funcion para cambiar el status de la tabla ExamenFisico */
    public function eliminarRevisionSistema($id)
    {
        try {
            if ($id !== '' && isset($id)) {
                $user = Auth::user();
                RevisionSistema::where('idRevisionSistema', $id)->update([
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
