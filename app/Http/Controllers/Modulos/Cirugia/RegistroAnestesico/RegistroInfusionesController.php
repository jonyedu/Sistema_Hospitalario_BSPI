<?php

namespace App\Http\Controllers\Modulos\Cirugia\RegistroAnestesico;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Cirugia\RegistroAnestesico\Infusiones;
use App\Models\Modulos\Cirugia\RegistroAnestesico\RegistroInfusiones;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistroInfusionesController extends Controller
{
    public function guardarRegistroInfusiones(Request $request)
    {
        try {
            $user = Auth::user();
            if (count($request->input('infusiones')) > 0) {
                foreach ($request->input('infusiones') as $infusion) {
                    $infusionID = Infusiones::where('status', 1)->where('name_system', $infusion['name'])->first();
                    if ($infusionID !== null) {
                        RegistroInfusiones::create([
                            'infusiones_id' => $infusionID->id,
                            'registro_anestesia_id' => $request->input('registro_anestesia_id'),
                            'valor' => $infusion['valor'],
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
