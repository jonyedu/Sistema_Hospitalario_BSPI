<?php

namespace App\Http\Controllers\Modulos\Parametrizacion\Tarifario;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Parametrizacion\Tarifario\TarifarioCirugia;
use App\Models\Modulos\Parametrizacion\Tarifario\TarifarioMedicina;
use App\Models\Modulos\Parametrizacion\Tarifario\TarifarioProcedimiento;
use Exception;
use Illuminate\Http\Request;

class TarifarioApiController extends Controller
{
    function consultarTarifario($descripcion)
    {
        try {
            $TarifarioProcedimiento = TarifarioProcedimiento::select('codigo', 'descripcion')->where('descripcion', 'like', "%$descripcion%");
            $TarifarioCirugua = TarifarioCirugia::select('codigo', 'descripcion')->where('descripcion', 'like', "%$descripcion%")
                ->union($TarifarioProcedimiento);
            $tarifariosMedicinas = TarifarioMedicina::select('codigo', 'descripcion')->where('descripcion', 'like', "%$descripcion%")
                //  ->with('pacienteLista','pacienteHospitalizacion')
                ->union($TarifarioCirugua)
                ->orderBy('descripcion', 'asc')
                ->get();
            return  response()->json(['tarifariosMedicinas' => $tarifariosMedicinas], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}
