<?php

namespace App\Http\Controllers\Modulos\Seguridad\PerfilPorUsuario;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Seguridad\PerfilPorUsuario\PerfilPorUsuario;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilPorUsuarioController extends Controller
{
    public function cargarPerfilPorUsuarioTabla()
    {
        try {
            $perfilPorUsuario = PerfilPorUsuario::where('status', 1)
                ->orderBy('descripcion', 'asc')
                ->get();
            return  response()->json(['perfilPorUsuario' => $perfilPorUsuario], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }

    public function guardarPerfilPorUsuario(Request $request)
    {
        try {
            PerfilPorUsuario::Create(
                [
                    'empresa' => 1,
                    'sucursal' => 1,
                    'perfil' => $request->input('id_perfil'),
                    'modulo' => $request->input('id_modulo'),
                    'opcion_aplicacion' => $request->input('id_opcion_aplicacion'),
                    'superior' => $request->input('superior'),
                    'status' => 1,
                ]
            );

            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
    public function modificarPerfil(Request $request)
    {
        try {
            PerfilPorUsuario::where('status', 1)
                ->where('codigo', $request->input('id_perfil'))
                ->Update(
                    [
                        'empresa' => 1,
                        'sucursal' => 1,
                        'perfil' => $request->input('id_perfil'),
                        'modulo' => $request->input('id_modulo'),
                        'opcion_aplicacion' => $request->input('id_opcion_aplicacion'),
                        'superior' => $request->input('superior'),
                        'status' => 1,
                    ]
                );
            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
    public function eliminarPerfilPorUsuario($id)
    {
        try {
            PerfilPorUsuario::where('status', 1)
                ->where('codigo', $id)
                ->Update(
                    [
                        'status' => 0,
                    ]
                );
            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}
