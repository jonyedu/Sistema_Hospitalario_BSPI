<?php

namespace App\Http\Controllers\Modulos\Parametrizacion\Usuarios;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuariosApiController extends Controller
{
    public function cargarUserTable()
    {
        try {
            $users = User::where('id', auth()->user()->id)->first();
            return  response()->json(['users' => $users], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}
