<?php

namespace App\Http\Controllers\Modulos\Cirugia\RegistroAnestesico;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Cirugia\RegistroAnestesico\AgenteAnestesia;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgenteAnestesiaController extends Controller
{
    public function cargarAgenteTipoPosicionComboBox()
    {
        try {
            $tipoPosiciones = AgenteAnestesia::where('status', 1)->where('tipo_id', 2)->orderBy('id', 'asc')->get();
            return  response()->json(['tipoPosiciones' => $tipoPosiciones], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}
