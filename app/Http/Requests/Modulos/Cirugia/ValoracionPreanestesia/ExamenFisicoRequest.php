<?php

namespace App\Http\Requests\Modulos\Cirugia\ValoracionPreanestesia;

use Illuminate\Foundation\Http\FormRequest;

class ExamenFisicoRequest extends FormRequest
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
            'frm_cmBocaAperturaOral' => 'required|min:0|max:5|numeric|',
            'frm_puntuacionNeurologico' => 'required|min:3|max:15|numeric|',
        ];
    }
}
