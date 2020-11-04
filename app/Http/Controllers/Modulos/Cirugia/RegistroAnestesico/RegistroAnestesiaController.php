<?php

namespace App\Http\Controllers\Modulos\Cirugia\RegistroAnestesico;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Cirugia\RegistroAnestesico\RegistroAnestesico;
use App\Models\Modulos\Cirugia\RegistroAnestesico\ResitroAnestesico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistroAnestesiaController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();
        $registroAnestesico = RegistroAnestesico::create(
            [
                'SecCirPro' => $request->input('cirugia_id'),
                'usu_created_update' => $user->id,
                ]);
        return response()->json(
            ['id' => $registroAnestesico->id], 200);
    }
}
