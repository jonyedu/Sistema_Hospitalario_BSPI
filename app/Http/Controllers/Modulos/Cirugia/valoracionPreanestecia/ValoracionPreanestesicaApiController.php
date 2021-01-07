<?php

namespace App\Http\Controllers\Modulos\Cirugia\valoracionPreanestecia;

use App\Http\Controllers\Controller;
use App\Http\Requests\Modulos\Cirugia\valoracionPreanestecia\ConsultarListaCirugiaRequest;
use App\Models\Modulos\Cirugia\CirugiaProgramadas;
use App\Models\Modulos\Cirugia\valoracionPreanestecia\RevisionSistema;
use DateTime;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;



class ValoracionPreanestesicaApiController extends Controller
{
    public function validarSecCirPro($secCirPro)
    {
        try {
            $secCirPro = RevisionSistema::where('SecCirPro', $secCirPro)
                ->first();
            //$grafica = GraficaPorCirugia::where('SecCirPro', 1)->first();
            return  response()->json(['secCirPro' => $secCirPro], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }

    public function cargarListaCirugiaProgramadaPaciente(ConsultarListaCirugiaRequest $request)
    {
        try {
            /* $datosPaciente = DB::connection('admin_db_sql')
                ->select("exec SpAdm_CirugiasProgramdasConsultar '2890','','DP' "); */

             $fecha = $request->input('frm_fecha');
            // $listaCirugiaProgramadaPaciente = DB::connection('admin_db_sql')->select("exec SpAdm_CirugiasProgramdasConsultar '','" . $fecha . "','PO' ");


            $listaCirugiaProgramadaPaciente = CirugiaProgramadas::where('CirProFecPro', $fecha)
            ->with('pacienteLista','pacienteHospitalizacion')
            ->get();


            return  response()->json(['listaCirugiaProgramadaPaciente' => $listaCirugiaProgramadaPaciente], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
    /* Funcion para cargar los datos y generar el formulario para imprimir*/
    public function cargarPdfFormularioValoracionPreanestesica($idSecCirPro)
    {
        if ($idSecCirPro !== '' && isset($idSecCirPro)) {
            try {
                //Variables
                $nombreArchivo = "FormularioValoracionPreanestesica.pdf";
                $datosPaciente = null;
                $edadPaciente = 0;

                $datosPaciente = CirugiaProgramadas::where('SecCirPro', $idSecCirPro)
                    ->with('pacienteLista')
                    ->first();
                if($datosPaciente != null){
                    if($datosPaciente->pacienteLista != null){
                        $edadPaciente = $this->calculaEdad($datosPaciente->pacienteLista->fecha_nacimiento);
                    }
                }
                $datosValoracionPreanestesica = RevisionSistema::where('SecCirPro', $idSecCirPro)
                    ->where('status', '1')
                    ->with('antecedente', 'examenFisico', 'paraclinico.tipoSangre', 'firmasPorAtencion')
                    ->first();
                //return response()->json(['datosPaciente' => $datosPaciente, 'datosValoracionPreanestesica' => $datosValoracionPreanestesica, 'edadPaciente' => $edadPaciente,]);
                $pdf = PDF::loadView('reports.pdf.formulario-valoracion-preanestesica', [
                    'datosPaciente' => $datosPaciente,
                    'edadPaciente' => $edadPaciente,
                    'datosValoracionPreanestesica' => $datosValoracionPreanestesica
                ]);

                return $pdf->stream($nombreArchivo);

            } catch (Exception $e) {
                return response()->json(['mensaje' => $e->getMessage()], 500);
            }
        } else {
            return response()->json(['mensaje' => "No Existe Datos"], 500);
        }
    }
    /* Funcion para cargar la edad del paciente*/
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
    /* Funcion para cargar los datos y generar el formulario para imprimir*/ //=> para el servidor de base de datos del BSPI
    /* public function cargarPdfFormularioValoracionPreanestesica1($idSecCirPro)
    {
        if ($idSecCirPro !== '' && isset($idSecCirPro)) {
            try {
                //Variables
                $nombreArchivo = "FormularioValoracionPreanestesica.pdf";

                $datosValoracionPreanestesica = RevisionSistema::where('SecCirPro', $idSecCirPro)
                ->where('status', '1')
                ->with('antecedente','examenFisico', 'paraclinico')
                ->first();

                $cabezera = DB::connection('admin_db_sql')
                ->select("exec SpAdm_CirugiasProgramdasConsultar '".$idSecCirPro."','','DP' ");

                $pdf = PDF::loadView('reports.pdf.formulario-valoracion-preanestesica', [
                    'cabezera' => $cabezera,
                    'datosValoracionPreanestesica' => $datosValoracionPreanestesica
                ]);
                return $pdf->stream($nombreArchivo);
            } catch (Exception $e) {
                return response()->json(['mensaje' => $e->getMessage()], 500);
            }
        } else {
            return response()->json(['mensaje' => "No Existe Datos"], 500);
        }
    } */
}
