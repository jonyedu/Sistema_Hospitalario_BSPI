<?php

namespace App\Http\Requests\Modulos\Cirugia\valoracionPreanestecia;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ConsultarListaCirugiaRequest extends FormRequest
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
            'frm_fecha' => ["required"]
        ];
    }

    protected function failedValidation(Validator $validation)
    {
        throw new HttpResponseException(
            response()->json([
                'msg' => 'Debe seleccionar una fecha a buscar.'
            ],421)
        );

    }
}
