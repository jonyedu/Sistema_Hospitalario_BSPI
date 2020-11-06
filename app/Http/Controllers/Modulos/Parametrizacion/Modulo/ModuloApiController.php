<?php

namespace App\Http\Controllers\Modulos\Parametrizacion\Modulo;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ModuloApiController extends Controller
{
    public function cargarModuloComboBox()
    {
        try {
            $modulo = DB::select("exec SPSEG_CONSULTAR_GENERAL_MODULO 1,1");
            return  response()->json(['modulo' => $modulo], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }

    public function guardarModulo(Request $request)
    {
        try {
            $user = Auth::user();
            $descripcion = $request->input('frm_descripcion');
            $abreviatura = $request->input('frm_abreviatura');
            $imagen = $request->input('frm_imagen');
            $usuario_ingreso = $user->id;
            $usuario_modificacion = $user->id;
            $pcname = $_SERVER["REMOTE_ADDR"];
            $status = 1;
            $orden = $request->input('frm_orden');
            DB::insert("exec SPSEG_INSERT_MODULO " . "'$descripcion'" . ",'$abreviatura'" . ",'$imagen'" . ",'$usuario_ingreso'" . ",'$usuario_modificacion'" . ",'$pcname'" . ",'$status'" . ",'$orden'");
            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
    public function modificarModulo(Request $request)
    {
        try {
            $user = Auth::user();
            $codigo = $request->input('frm_codigo');
            $descripcion = $request->input('frm_descripcion');
            $abreviatura = $request->input('frm_abreviatura');
            $imagen = $request->input('frm_imagen');
            $usuario_modificar = $user->id;
            $pcname = $_SERVER["REMOTE_ADDR"];
            $status = 1;
            $orden = $request->input('frm_orden');
            DB::update("exec SPSEG_UPDATE_MODULO " . "'$codigo'" . ",'$descripcion'" . ",'$abreviatura'" . ",'$imagen'" . ",'$usuario_modificar'" . ",'$pcname'" . ",'$status'" . ",'$orden'");
            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
    public function eliminarModulo($id)
    {
        try {
            DB::update("exec SPSEG_ELIMINAR_MODULO " . "'$id'");
            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}
