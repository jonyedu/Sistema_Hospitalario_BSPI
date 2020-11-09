<?php

namespace App\Http\Controllers\Modulos\Cirugia\TipoPosiciones;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Cirugia\TipoPosiciones\TipoPosiciones;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TipoPosicionesController extends Controller
{
    public function cargarTipoPosicionesTabla()
    {
        try {
            $tipoPosiciones = TipoPosiciones::where('status', 1)->orderBy('id', 'asc')->get();
            return  response()->json(['tipoPosiciones' => $tipoPosiciones], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }

    public function guardarModificarArchivo(Request $request)
    {
        try {
            $file = $request->file('logo');
            //echo "foto: " . $request->file('logo');
            $destinationPath=public_path('icons');

            // Generate a file name with extension
            if ($file != null && $file != '') {
                $fileFoto = 'iconTpPos-' . time() . '.' . $file->getClientOriginalExtension();
                $file->move($destinationPath, $fileFoto);
                $pathFoto='/'.'icons/'.$fileFoto;
            }
            return response()->json(['pathFoto' => isset($pathFoto) && $pathFoto != null ? $pathFoto : ''], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }

    public function guardarTipoPosiciones(Request $request)
    {
        try {
            $user = Auth::user();
            TipoPosiciones::create([
                'descripcion' => $request->input('frm_descripcion'),
                'name_system' => $request->input('frm_name_system'),
                'img_src' => $request->input('frm_imagen'),
                'usu_created_update' => $user->id,
                'pcip' => $_SERVER["REMOTE_ADDR"],
                'status' => '1'
            ]);
            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
    public function modificarTipoPosiciones(Request $request)
    {
        try {
            $user = Auth::user();
            TipoPosiciones::where('id', $request->input('frm_id')) ->update([
                'descripcion' => $request->input('frm_descripcion'),
                'name_system' => $request->input('frm_name_system'),
                'img_src' => $request->input('frm_imagen'),
                'usu_created_update' => $user->id,
                'pcip' => $_SERVER["REMOTE_ADDR"],
                'status' => '1'
            ]);
            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
    public function eliminarTipoPosiciones($id)
    {
        try {
            TipoPosiciones::where('id', $id) ->update([
                'status' => '0'
            ]);
            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}
