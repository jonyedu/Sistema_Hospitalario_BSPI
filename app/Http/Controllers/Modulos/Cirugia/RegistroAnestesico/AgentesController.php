<?php

namespace App\Http\Controllers\Modulos\Cirugia\RegistroAnestesico;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Cirugia\RegistroAnestesico\AgenteDetalleRegistro;
// use App\Models\Modulos\Cirugia\RegistroAnestesico\AgenteDetalleRegistro;
use App\Models\Modulos\Cirugia\RegistroAnestesico\Agentes;
use App\Models\Modulos\Cirugia\RegistroAnestesico\TipoAgenteAnestesia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // return response()->json($request->input());
        // Datos del detalle
        $datos = (object) $request->input('datos');
        // dd($datos);
        if($datos === null || !is_object($datos) ){
            return response()->json(['message' => 'error'], 400);
        }

        $datos->registro_anestesia_id = $request->input('SecCirPro');

        switch ($request->input('tipo')) {
            case 'respiracion':
                # respiración
                return response()->json(['pending']);
                break;
            case 'agente':
                # agente
                $agente = Agentes::where('name_system', $datos->name)->first();
                // return response()->json( $agente, 201);

                // dd($agente);
                if($agente !== null){
                    // $datos->agente_id =  $agente ->id;
                    // $datos->usu_created_update =  auth()->user()->id;
                    AgenteDetalleRegistro::create([
                        'registro_anestesia_id'   => $datos->registro_anestesia_id,
                        'hora'   => $datos->hora,
                        'min'   => $datos->min,
                        'segundos'   => $datos->segundos,
                        'agente_id'   => $agente ->id,
                        'indice_hora'   => $datos->indice_hora,
                        'usu_created_update'   =>auth()->user()->id,
                        'pcip' => $_SERVER["REMOTE_ADDR"],
                        'status' => '1'
                    ]);
                    return response()->json(['status' => 'Guarado'],201);
                }
                break;
            case 'posicion':
                # posicion
                return response()->json(['pending']);
                break;

        }

        return response()->json(['message' => 'no encontrado'],404);
    }
}
