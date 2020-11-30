<?php

namespace App\Http\Controllers\Modulos\Parametrizacion\ServicioMedico;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Admision\Medico\Medico;
use App\Models\Modulos\Parametrizacion\ServicioMedico\ServicioMedico;
use Exception;
use Illuminate\Http\Request;

class ServicioMedicoApiController extends Controller
{
    /* Funcion para cargar el dato de la tabla Examen Fisico con la condicion del idSecCirPro */
    public function cargarServicioMedicoPorMedico($idServicioMedico)
    {
        try {
            $serviciosMedicos = ServicioMedico::where('status', 1)
                ->where('id', $idServicioMedico)
                ->get();
            return  response()->json(['serviciosMedicos' => $serviciosMedicos], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}
