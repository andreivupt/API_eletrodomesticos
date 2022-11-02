<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class ProductStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'DS_NAME'        => 'required|string|max:100',
            'DS_DESCRIPTION' => 'required|string',
            'DS_BRAND'       => 'required|string',
            'NM_BAR_CODE'    => 'required|numeric',
            'NM_VALUE'       => 'numeric'
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Erro(s) de validação',
            'data'      => $validator->errors()
        ]));
    }

    public function messages()
    {
        return [
            'DS_NAME.required' => 'O nome do produto é obrigatório',
            'DS_NAME.max'      => 'O nome do produto pode ter no máximo 100 caracteres',
            'DS_NAME.string'   => 'O nome do produto precisa ser um texto',

            'DS_DESCRIPTION.required' => 'A descrição do produto é obrigatório',
            'DS_DESCRIPTION.string'   => 'A descrição do produto precisa ser um texto',

            'DS_BRAND.required' => 'A marca do produto é obrigatório',
            'DS_BRAND.string'   => 'A marca do produto precisa ser um texto',

            'NM_BAR_CODE.required' => 'O código do produto é obrigatório',
            'NM_BAR_CODE.numeric'  => 'O código do produto precisa ser um número',

            'NM_VALUE.numeric'  => 'O valor do produto precisa ser um número',
        ];
    }
}
