<?php

namespace App\Http\Controllers\Modulos\Parametrizacion\TipoSangre;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Parametrizacion\TipoSangre\TipoSangre;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TipoSangreApiController extends Controller
{
    /* Funcion para cargar el dato de la tabla Examen Fisico con la condicion del idSecCirPro */
    public function cargarTipoSangreComboBox()
    {
        try {
            $tipoSangre = TipoSangre::where('status', 1)->get();
            return  response()->json(['tipoSangre' => $tipoSangre], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}
