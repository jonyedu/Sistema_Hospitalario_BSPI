<?php

namespace App\Http\Controllers\Modulos\Cirugia\RegistroAnestesico;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Cirugia\RegistroAnestesico\AgenteAnestesia;
// use App\Models\Modulos\Cirugia\RegistroAnestesico\AgenteDetalleRegistro;
use App\Models\Modulos\Cirugia\RegistroAnestesico\DatosAgentes;
use App\Models\Modulos\Cirugia\TipoAgente\TipoAgente;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DatosAgentesController extends Controller
{
    /* Echo por mi */
    /* public function obtenerTipoAgente(){
        try {
            return  response()->json([TipoAgente::cargarTipoAgenteTabla()], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    } */

    /**
     *
     */
    public function obtenerAgenteAnestesiaJson($tipo)
    {
        return response()->json(AgenteAnestesia::activosPorTipo($tipo));
    }
    /**
     *
     */
    public function guardarDatosAgentes(Request $request, $registro_id)
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
                /* $agente = AgenteAnestesia::where('name_system', $datos->name)->first(); =>cambie */
                $agente = TipoAgente::where('name_system', $datos->name)->first();
                // return response()->json( $agente, 201);

                // dd($agente);
                if($agente !== null){
                    // $datos->agente_id =  $agente ->id;
                    // $datos->usu_created_update =  auth()->user()->id;
                    DatosAgentes::create([
                        'registro_anestesia_id'   => $datos->registro_anestesia_id,
                        'hora'   => $datos->hora,
                        'min'   => $datos->min,
                        'segundos'   => $datos->segundos,
                        'agente_id'   => $agente ->id,
                        'indice_hora'   => $datos->indice_hora,
                        'indice_min' =>"0", //revisar
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
