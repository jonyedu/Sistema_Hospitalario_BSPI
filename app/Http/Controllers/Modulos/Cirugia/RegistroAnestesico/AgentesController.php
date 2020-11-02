<?php

namespace App\Http\Controllers\Modulos\Cirugia\RegistroAnestesico;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Cirugia\RegistroAnestesico\AgenteDetalleRegistro;
use App\Models\Modulos\Cirugia\RegistroAnestesico\Agentes;
use Illuminate\Http\Request;

class AgentesController extends Controller
{
    /**
     * 
     */
    public function obtenerAgentesJson($tipo)
    {
        return response()->json(Agentes::activosPorTipo($tipo));
    }
    /**
     * 
     */
    public function guardarAgente(Request $request, $registro_id)
    {
        AgenteDetalleRegistro::create($request->all());
        return response()->json($request->input());
    }
}
