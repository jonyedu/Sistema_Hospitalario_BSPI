<?php

namespace App\Http\Controllers\Modulos\Parametrizacion\Sala;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Parametrizacion\Sala\Sala;
use Exception;
use Illuminate\Http\Request;

class SalaApiController extends Controller
{
    /* Funcion para cargar el dato de la tabla Examen Fisico con la condicion del idSecCirPro */
    public function cargarSalaComboBox()
    {
        try {
            $salas = Sala::where('status', 1)->get();
            return  response()->json(['salas' => $salas], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}
