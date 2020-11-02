<?php

namespace App\Http\Controllers\Modulos\Parametrizacion\SubModulo;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubModuloApiController extends Controller
{
    public function cargarSubModuloComboBox($id)
    {
        try {
            $subModulo = DB::select("exec SPSEG_OPCION_APLICACION_POR_MODULO ".$id );
            return  response()->json(['subModulo' => $subModulo], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}
