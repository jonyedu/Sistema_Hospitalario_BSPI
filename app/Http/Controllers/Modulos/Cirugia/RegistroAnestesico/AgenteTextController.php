<?php

namespace App\Http\Controllers\Modulos\Cirugia\RegistroAnestesico;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Cirugia\RegistroAnestesico\AgenteText;
use App\Models\Modulos\Cirugia\RegistroAnestesico\AgenteTextValor;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgenteTextController extends Controller
{
    public function guardarModificarAgenteText(Request $request)
    {
        try {
            $user = Auth::user();
            if (sizeOf($request->input('datos')) > 0) {
                foreach ($request->input('datos') as $dato) {
                    if (!empty($dato)) {
                        if ($dato['valores'] != null) {
                            /* AgenteText::where('registro_anestesia_id', $request->input('registro_anestesia_id'))
                                ->where('descripcion', $dato['descripcion'])
                                ->update([
                                    'status' => '0'
                                ]); */
                            $agenteText = AgenteText::UpdateOrCreate(
                                [
                                    'registro_anestesia_id' =>  $request->input('registro_anestesia_id'),
                                    'descripcion' => $dato['descripcion'],
                                ],
                                [
                                    'registro_anestesia_id' =>  $request->input('registro_anestesia_id'),
                                    'descripcion' => $dato['descripcion'],
                                    'usu_created_update' => $user->id,
                                    'pcip' => $_SERVER["REMOTE_ADDR"],
                                    'status' => '1'
                                ]
                            );

                            foreach ($dato['valores'] as $valor) {
                                /* AgenteTextValor::where('agente_texto_id', $agenteText->id)
                                    ->where('valor', $valor)
                                    ->update([
                                        'status' => '0'

                                    ]); */
                                AgenteTextValor::UpdateOrCreate(
                                    [
                                        'agente_texto_id' => $agenteText->id,
                                        'valor' => $valor,
                                    ],
                                    [
                                        'agente_texto_id' => $agenteText->id,
                                        'hora' =>  $request->input('hora'),
                                        'min' =>  $request->input('minuto'),
                                        'indice_min' =>  $request->input('indice_minuto'),
                                        'valor' => $valor,
                                        'usu_created_update' => $user->id,
                                        'pcip' => $_SERVER["REMOTE_ADDR"],
                                        'status' => '1'
                                    ]
                                );
                            }
                        }
                    }
                }
            }

            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}
