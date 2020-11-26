<?php

namespace App\Http\Controllers\Modulos\Cirugia\RegistroAnestesico;

use App\Http\Controllers\Controller;
use App\Models\Modulos\Cirugia\RegistroAnestesico\DatosRegistro;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DatosRegistroController extends Controller
{
    public function guardarDatosRegistro(Request $request)
    {
        try {
            $user = Auth::user();
            DatosRegistro::UpdateOrCreate(
                [
                    'registro_anestesia_id' => $request->input('registro_anestesia_id')
                ],
                [
                    'registro_anestesia_id' => $request->input('registro_anestesia_id'),
                    'paciente' => $request->input('paciente'),
                    'historia_clinica' => $request->input('historia_clinica'),
                    'fecha' => $request->input('fecha'),
                    'edad' => $request->input('edad'),
                    'sexo' => $request->input('sexo'),
                    'estatura' => $request->input('estatura'),
                    'peso' => $request->input('peso'),
                    'ocupacion_actual' => $request->input('ocupacion_actual'),
                    'servicio' => $request->input('servicio'),
                    'sala' => $request->input('sala'),
                    'cama' => $request->input('cama'),
                    'id_diagnostico_pre' => $request->input('id_diagnostico_pre'),
                    'id_diagnostico_post' => $request->input('id_diagnostico'),
                    'operacion_propuesta' => $request->input('operacion_propuesta'),
                    'id_cirujano' => $request->input('id_cirujano'),
                    'id_ayudante1' => $request->input('id_ayudante1'),
                    'id_operacion_realizada' => $request->input('id_tarifaria'),
                    'id_anestesiologo' => $request->input('id_anestesiologo'),
                    'id_ayudante2' => $request->input('id_ayudante2'),
                    'id_instrumentista' => $request->input('id_instrumentista'),
                    'usu_created_update' => $user->id,
                    'pcip' => $_SERVER["REMOTE_ADDR"],
                    'status' => '1',

                ]
            );
            return  response()->json(['msj' => 'OK'], 200);
        } catch (Exception $e) {
            return response()->json(['mensaje' => $e->getMessage()], 500);
        }
    }
}
