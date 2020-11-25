<?php

namespace App\Http\Controllers\Modulos\Parametrizacion\Diagnostico;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Parametrizacion\Diagnostico\Diagnostico;
use Exception;
use Illuminate\Http\Request;

class DiagnosticoApiController extends Controller
{
    public function cargarDiagnosticoComboBox($buscar)
    {
        if ($buscar != "") {
            try {
                $diagnosticos = Diagnostico::where('status', 1)
                    ->where('tipo', 'CIE10')
                    //->where('descripcion', 'like', '%' . $buscar . '%')
                    ->where('descripcion', 'like',"%$buscar%" )
                    ->get();
                return  response()->json(['diagnosticos' => $diagnosticos], 200);
            } catch (Exception $e) {
                return response()->json(['mensaje' => $e->getMessage()], 500);
            }
        }
    }
}
