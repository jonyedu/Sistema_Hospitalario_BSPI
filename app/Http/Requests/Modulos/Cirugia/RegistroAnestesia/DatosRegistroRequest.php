<?php

namespace App\Http\Requests\Modulos\Cirugia\RegistroAnestesia;

use Illuminate\Foundation\Http\FormRequest;

class DatosRegistroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'estatura' => 'required',
            'peso' => 'required',
            'id_servicio_medico' => 'required',
            'id_diagnostico_pre' => 'required',
            'id_diagnostico' => 'required',
            'id_cirujano' => 'required',
            'id_ayudante1' => 'required',
            'id_tarifaria' => 'required',
            'id_anestesiologo' => 'required',
            'id_instrumentista' => 'required',
        ];
    }
}
