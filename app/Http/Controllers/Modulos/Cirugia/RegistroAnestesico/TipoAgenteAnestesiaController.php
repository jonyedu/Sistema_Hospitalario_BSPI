<?php

namespace App\Http\Controllers\Modulos\Cirugia\RegistroAnestesico;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Cirugia\RegistroAnestesico\TipoAgenteAnestesia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TipoAgenteAnestesiaController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();
        $tipoAgenteAnestesia = TipoAgenteAnestesia::create(
            [
                'descripcion' => $request->input('cirugia_id'),
                'name_system' => $request->input('cirugia_id'),
                'usu_created_update' => $user->id,
                'status' => 1
                ]);
        return response()->json(
            ['id' => $tipoAgenteAnestesia->id], 200);
    }
}
