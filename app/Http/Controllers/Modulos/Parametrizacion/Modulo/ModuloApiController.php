<?php

namespace App\Http\Controllers\Modulos\Parametrizacion\Modulo;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Parametrizacion\Modulo\SgModulo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ModuloApiController extends Controller
{
    public function cargarMenu()
    {
        try {
            $menus = SgModulo::where('status', 1)
                ->with('subModulo')
                ->orderBy('orden', 'asc')
                ->get();
            return  response()->json(['menus' => $menus], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }

    public function cargarModuloTabla()
    {
        try {
            /* $modulo = DB::select("exec SPSEG_CONSULTAR_GENERAL_MODULO 1,1"); */
            $modulo = SgModulo::where('status', 1)
                ->orderBy('orden', 'asc')
                ->get();
            return  response()->json(['modulo' => $modulo], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }

    public function guardarModulo(Request $request)
    {
        try {
            $user = Auth::user();
            SgModulo::Create(
                [
                    'empresa' => 1,
                    'sucursal' => 1,
                    'descripcion' => $request->input('frm_descripcion'),
                    'abreviatura' => $request->input('frm_abreviatura'),
                    'usuario_ingreso' => $user->id,
                    'fecha_ingreso' => date("Y-m-d H:i:s"),
                    'usuario_modificacion' => $user->id,
                    'fecha_modificacion' => date("Y-m-d H:i:s"),
                    'pcname' =>  $_SERVER["REMOTE_ADDR"],
                    'status' => 1,
                    'orden' => $request->input('frm_orden'),
                    'imagen' => $request->input('frm_imagen'),
                ]
            );

            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
    public function modificarModulo(Request $request)
    {
        try {
            $user = Auth::user();
            /* $codigo = $request->input('frm_codigo');
            $descripcion = $request->input('frm_descripcion');
            $abreviatura = $request->input('frm_abreviatura');
            $imagen = $request->input('frm_imagen');
            $usuario_modificar = $user->id;
            $pcname = $_SERVER["REMOTE_ADDR"];
            $status = 1;
            $orden = $request->input('frm_orden');
            DB::update("exec SPSEG_UPDATE_MODULO " . "'$codigo'" . ",'$descripcion'" . ",'$abreviatura'" . ",'$imagen'" . ",'$usuario_modificar'" . ",'$pcname'" . ",'$status'" . ",'$orden'");
            */
            SgModulo::where('status', 1)
                ->where('codigo', $request->input('frm_codigo'))
                ->Update(
                    [
                        'empresa' => 1,
                        'sucursal' => 1,
                        'descripcion' => $request->input('frm_descripcion'),
                        'abreviatura' => $request->input('frm_abreviatura'),
                        'usuario_modificacion' => $user->id,
                        'fecha_modificacion' => date("Y-m-d H:i:s"),
                        'pcname' =>  $_SERVER["REMOTE_ADDR"],
                        'status' => 1,
                        'orden' => $request->input('frm_orden'),
                        'imagen' => $request->input('frm_imagen'),
                    ]
                );
            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
    public function eliminarModulo($id)
    {
        try {
            $user = Auth::user();
            SgModulo::where('status', 1)
                ->where('codigo', $id)
                ->Update(
                    [
                        'usuario_modificacion' => $user->id,
                        'fecha_modificacion' => date("Y-m-d H:i:s"),
                        'pcname' =>  $_SERVER["REMOTE_ADDR"],
                        'status' => 1,
                    ]
                );
            //DB::update("exec SPSEG_ELIMINAR_MODULO " . "'$id'");
            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}
