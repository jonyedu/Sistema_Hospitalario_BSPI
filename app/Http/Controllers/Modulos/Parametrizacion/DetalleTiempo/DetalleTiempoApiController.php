<?php

namespace App\Http\Controllers\Modulos\Parametrizacion\DetalleTiempo;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Parametrizacion\DetalleTiempo\DetalleTiempo;
use Exception;
use Illuminate\Http\Request;

class DetalleTiempoApiController extends Controller
{
    public function cargarDetalleTiempo(){
        try {
            $detallesTiempos = DetalleTiempo::where('status', 1)
                ->orderBy('id_detalle_tiempo', 'asc')
                ->get();
            return  response()->json(['detallesTiempos' => $detallesTiempos], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}
