<?php

namespace App\Http\Controllers\Modulos\Admision\Medico;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Admision\Medico\Medico;
use Exception;
use Illuminate\Http\Request;

class MedicoApiController extends Controller
{
    public function cargarMedicoPorEspecializacion($idEspecializacion)
    {
        try {
            $medicos = Medico::where('status', 1)
                ->where('especializacion', $idEspecializacion)
                ->orderBy('apellidos', 'asc')
                ->get();
            return  response()->json(['medicos' => $medicos], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }

    public function cargarCirujano()
    {
        try {
            $medicos = Medico::where('status', 1)
                ->whereIn('especializacion', [7,8,9,10,11,12,13])
                ->orderBy('apellidos', 'asc')
                ->get();
            return  response()->json(['medicos' => $medicos], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }

    public function cargarMedicoAll()
    {
        try {
            $medicos = Medico::where('status', 1)
                ->orderBy('apellidos', 'asc')
                ->get();
            return  response()->json(['medicos' => $medicos], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}
