<?php

namespace App\Http\Controllers\Modulos\Seguridad\Usuario;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Parametrizacion\Usuario\SegUsuario;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function guardarUsuario(Request $request)
    {
        try {
            $user = Auth::user();
            SegUsuario::Create(
                [
                    'nombre',
                    'apellido',
                    'usuario',
                    'password',
                    'perfil',
                    'profesion',
                    'abreviatura',
                    'usr_ingreso',
                    'fec_ingreso',
                    'usr_modificacion',
                    'fec_modificacion',
                    'pc_name',
                    'status',
                    'PermitirAnular',
                    'codigo_usu',

                    'descripcion' => $request->input('descripcion'),
                    'abreviatura' => $request->input('abreviatura'),
                    'usuario_ingreso' => $user->id,
                    'fecha_ingreso' => date("Y-m-d H:i:s"),
                    'usuario_modificacion' => $user->id,
                    'fecha_modificacion' => date("Y-m-d H:i:s"),
                    'pcname' =>  $_SERVER["REMOTE_ADDR"],
                    'status' => 1,
                ]
            );

            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
    public function modificarUsuario(Request $request)
    {
        try {
            $user = Auth::user();
            SegUsuario::where('status', 1)
                ->where('codigo', $request->input('id_perfil'))
                ->Update(
                    [
                        'descripcion' => $request->input('descripcion'),
                        'abreviatura' => $request->input('abreviatura'),
                        'usuario_ingreso' => $user->id,
                        'fecha_ingreso' => date("Y-m-d H:i:s"),
                        'usuario_modificacion' => $user->id,
                        'fecha_modificacion' => date("Y-m-d H:i:s"),
                        'pcname' =>  $_SERVER["REMOTE_ADDR"],
                        'status' => 1,
                    ]
                );
            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
    public function eliminarUsuario($id)
    {
        try {
            $user = Auth::user();
            SegUsuario::where('status', 1)
                ->where('codigo', $id)
                ->Update(
                    [
                        'usuario_modificacion' => $user->id,
                        'fecha_modificacion' => date("Y-m-d H:i:s"),
                        'pcname' =>  $_SERVER["REMOTE_ADDR"],
                        'status' => 0,
                    ]
                );
            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}
