<?php

namespace App\Http\Controllers\Modulos\Cirugia\RegistroAnestesico;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Cirugia\RegistroAnestesico\RegistroAnestesia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistroAnestesiaController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();
        $registroAnestesico = RegistroAnestesia::create(
            [
                'SecCirPro' => $request->input('cirugia_id'),
                'usu_created_update' => $user->id,
                ]);
        return response()->json(
            ['id' => $registroAnestesico->id], 200);
    }
}
