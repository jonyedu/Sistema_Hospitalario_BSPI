<?php

namespace App\Http\Controllers\Modulos\Cirugia\RegistroTiempo;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Cirugia\CirugiaProgramadas;
use App\Models\Modulos\Cirugia\RegistroTiempo\CirugiaSuspendida;
use App\Models\Modulos\Cirugia\RegistroTiempo\RegistroTiempo;
use App\Models\Modulos\Parametrizacion\DetalleTiempo\DetalleTiempo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistroTiempoApiController extends Controller
{
    public function validarSecCirPro($secCirPro)
    {
        try {
            $secCirPro = RegistroTiempo::where('SecCirPro', $secCirPro)
                ->first();
            //$grafica = GraficaPorCirugia::where('SecCirPro', 1)->first();
            return  response()->json(['secCirPro' => $secCirPro], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
    public function cargarRegistroTiempoPorSecCirPro($id_cirugia_programada)
    {
        try {
            $registrosTiempos = RegistroTiempo::where('status', 1)
                ->where('SecCirPro', $id_cirugia_programada)
                ->with('detalleTiempo')
                ->orderBy('id_detalle_tiempo', 'asc')
                ->get();

            return  response()->json(['registrosTiempos' => $registrosTiempos], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }

    public function guardarRegistroTiempo(Request $request)
    {
        try {
            $user = Auth::user();
            $detallesTiempos = $request->input('detalles_tiempos');
            $detalleTiempo = RegistroTiempo::where('status', 1)
                ->where('SecCirPro', $request->input('id_cirugia_programada'))
                ->first();
            if ($detalleTiempo == null) {
                if (sizeOf($detallesTiempos) > 0) {
                    foreach ($detallesTiempos as $detalleTiempo) {
                        RegistroTiempo::Create(
                            [
                                'id_detalle_tiempo' => $detalleTiempo['id_detalle_tiempo'],
                                'SecCirPro' => $request->input('id_cirugia_programada'),
                                'tiempo' => date("H:i:s"),
                                'estado' => 'P',
                                'usu_created_update' => $user->id,
                                'pcip' => $_SERVER["REMOTE_ADDR"],
                                'status' => 1,
                            ]
                        );
                    }
                }
            } else {
                //aqui es para guardar uno por uno los tiempos
                $registroTiempo = RegistroTiempo::where('id_detalle_tiempo', $request->input('id_detalle_tiempo'))
                    ->where('SecCirPro', $request->input('id_cirugia_programada'))
                    ->get();

                if (sizeOf($registroTiempo) <= 12 && sizeOf($registroTiempo) >= 1) {
                    RegistroTiempo::where('id_detalle_tiempo', $request->input('id_detalle_tiempo'))
                        ->where('SecCirPro', $request->input('id_cirugia_programada'))
                        ->where('status', '1')
                        ->update([
                            'usu_created_update' => $user->id,
                            'pcip' => $_SERVER["REMOTE_ADDR"],
                            'status' => 0,
                        ]);
                }

                if (sizeOf($registroTiempo) == 1) {
                    RegistroTiempo::Create(
                        [
                            'id_detalle_tiempo' => $request->input('id_detalle_tiempo'),
                            'SecCirPro' => $request->input('id_cirugia_programada'),
                            'tiempo' => date("H:i:s"),
                            'estado' => 'I',
                            'usu_created_update' => $user->id,
                            'pcip' => $_SERVER["REMOTE_ADDR"],
                            'status' => 1,
                        ]
                    );
                } else if (sizeOf($registroTiempo) == 2) {
                    RegistroTiempo::Create(
                        [
                            'id_detalle_tiempo' => $request->input('id_detalle_tiempo'),
                            'SecCirPro' => $request->input('id_cirugia_programada'),
                            'tiempo' => date("H:i:s"),
                            'estado' => 'F',
                            'usu_created_update' => $user->id,
                            'pcip' => $_SERVER["REMOTE_ADDR"],
                            'status' => 1,
                        ]
                    );
                }
            }


            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
    public function suspenderRegistroTiempo(Request $request)
    {
        try {
            $user = Auth::user();

            //aqui es para guardar uno por uno los tiempos
            $registroTiempo = RegistroTiempo::where('SecCirPro', $request->input('id_cirugia_programada'))
                ->get();
            if (sizeOf($registroTiempo) <= 12 && sizeOf($registroTiempo) >= 1) {
                RegistroTiempo::where('SecCirPro', $request->input('id_cirugia_programada'))
                    ->where('status', '1')
                    ->update([
                        'usu_created_update' => $user->id,
                        'pcip' => $_SERVER["REMOTE_ADDR"],
                        'status' => 0,
                    ]);
            }
            CirugiaSuspendida::create([
                //'SecCirPro', $request->input('id_cirugia_programada'),
                'SecCirPro' => $request->input('id_cirugia_programada'),
                'observacion' => $request->input('observacion'),
                'tiempo' => date("Y-m-d H:i:s"),
                'usu_created_update' => $user->id,
                'pcip' => $_SERVER["REMOTE_ADDR"],
                'status' => 1,
            ]);

            CirugiaProgramadas::where('SecCirPro', $request->input('id_cirugia_programada'))
            ->update([
                'CirProEstado' => 4
            ]);

            $detallesTiempos = DetalleTiempo::where('status', 1)
                ->get();
            if (sizeOf($detallesTiempos) > 0) {
                foreach ($detallesTiempos as $detalleTiempo) {
                    RegistroTiempo::Create(
                        [
                            'id_detalle_tiempo' => $detalleTiempo->id_detalle_tiempo,
                            'SecCirPro' => $request->input('id_cirugia_programada'),
                            'tiempo' => date("H:i:s"),
                            'estado' => 'S',
                            'usu_created_update' => $user->id,
                            'pcip' => $_SERVER["REMOTE_ADDR"],
                            'status' => 1,
                        ]
                    );
                }
            }

            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}
