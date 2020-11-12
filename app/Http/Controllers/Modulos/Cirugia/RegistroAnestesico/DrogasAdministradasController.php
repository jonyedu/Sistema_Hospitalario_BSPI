<?php

namespace App\Http\Controllers\Modulos\Cirugia\RegistroAnestesico;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Cirugia\RegistroAnestesico\DrogasAdministradas;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DrogasAdministradasController extends Controller
{
    public function guardarDrogaAdministradas(Request $request)
    {
        try {
            $user = Auth::user();
            if (sizeOf($request->input('frm_descripciones')) > 0) {
                foreach ($request->input('frm_descripciones') as $descripcion) {
                    if (!empty($descripcion)) {
                        DrogasAdministradas::create([
                            'descripcion' => $descripcion,
                            'registro_anestesia_id' => $request->input('frm_registro_anestesia_id'),
                            'name_system' => $request->input('frm_name_system'),
                            'img_src' => $request->input('frm_imagen'),
                            'usu_created_update' => $user->id,
                            'pcip' => $_SERVER["REMOTE_ADDR"],
                            'status' => '1'
                        ]);
                    }
                }
            }

            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}
