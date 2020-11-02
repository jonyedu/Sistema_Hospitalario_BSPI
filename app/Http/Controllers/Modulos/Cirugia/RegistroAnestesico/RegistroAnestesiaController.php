<?php

namespace App\Http\Controllers\Modulos\Cirugia\RegistroAnestesico;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Cirugia\RegistroAnestesico\ResitroAnestesico;
use Illuminate\Http\Request;

class RegistroAnestesiaController extends Controller
{
    /**
     * 
     */
    public function guardarRegistro(Request $request, $registro_id)
    {

        $registro = ResitroAnestesico::created(['status'=> 1, 'SecCirPro' => $request->input('cirugia_id')]);
        return response()->json($registro);
    }
}
