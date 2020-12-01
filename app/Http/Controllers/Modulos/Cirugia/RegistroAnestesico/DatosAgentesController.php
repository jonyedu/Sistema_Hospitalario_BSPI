<?php

namespace App\Http\Controllers\Modulos\Cirugia\RegistroAnestesico;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Cirugia\RegistroAnestesico\AgenteAnestesia;
// use App\Models\Modulos\Cirugia\RegistroAnestesico\AgenteDetalleRegistro;
use App\Models\Modulos\Cirugia\RegistroAnestesico\DatosAgentes;
use App\Models\Modulos\Cirugia\RegistroAnestesico\DatosPosiciones;
use App\Models\Modulos\Cirugia\RegistroAnestesico\DatosRespiracion;
use App\Models\Modulos\Cirugia\TipoAgente\TipoAgente;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DatosAgentesController extends Controller
{
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
        if($datos === null || !is_object($datos) ){
            return response()->json(['message' => 'error'], 400);
        }

        $datos->registro_anestesia_id = $request->input('registro_anestesia_id');
        //echo $datos->name;
        switch ($request->input('tipo')) {
            case 'respiracion':
                # respiración
                $respiracion = AgenteAnestesia::where('name_system', $datos->name)->first();
                //dd("respiracion: " . $respiracion);
                if($respiracion !== null){
                    DatosRespiracion::create([
                        'registro_anestesia_id'   => $datos->registro_anestesia_id,
                        'hora'   => $datos->hora,
                        'min'   => $datos->min,
                        'segundos'   => $datos->segundos,
                        'agente_id'   => $respiracion ->id,
                        'indice_hora'   => $datos->indice_hora,
                        'indice_min' =>"0", //revisar
                        'valor' => $datos->valor,
                        'usu_created_update'   =>auth()->user()->id,
                        'pcip' => $_SERVER["REMOTE_ADDR"],
                        'status' => '1'
                    ]);
                    return response()->json(['status' => 'Guarado Respiracion'],201);
                }
                break;
            case 'agente':
                # agente
                $agente = AgenteAnestesia::where('name_system', $datos->name)->first();
                if($agente !== null){
                    DatosAgentes::UpdateOrCreate(
                        [

                        ],
                    [
                        'registro_anestesia_id'   => $datos->registro_anestesia_id,
                        'hora'   => $datos->hora,
                        'min'   => $datos->min,
                        'segundos'   => $datos->segundos,
                        'agente_id'   => $agente ->id,
                        'indice_hora'   => $datos->indice_hora,
                        'indice_min' =>"0", //revisar
                        'valor' => $datos->valor,
                        'usu_created_update'   =>auth()->user()->id,
                        'pcip' => $_SERVER["REMOTE_ADDR"],
                        'status' => '1'
                    ]);
                    return response()->json(['status' => 'Guarado Agente'],201);
                }
                break;
            case 'posicion':
                # posicion
                //dd("datos pru: " . $datos->name);
                $posicion = AgenteAnestesia::where('name_system', $datos->name)->first();
                //return response()->json($request->input());
                //dd("datos: " . $posicion);
                if($posicion !== null){
                    DatosPosiciones::create([
                        'registro_anestesia_id'   => $datos->registro_anestesia_id,
                        'hora'   => $datos->hora,
                        'min'   => $datos->min,
                        'segundos'   => $datos->segundos,
                        'posicion_id'   => $posicion ->id,
                        'indice_hora'   => $datos->indice_hora,
                        'indice_min' =>"0", //revisar
                        'usu_created_update'   =>auth()->user()->id,
                        'pcip' => $_SERVER["REMOTE_ADDR"],
                        'status' => '1'
                    ]);
                    return response()->json(['status' => 'Guarado Posiciones'],201);
                }
                break;

        }

        return response()->json(['message' => 'no encontrado'],404);
    }
}
