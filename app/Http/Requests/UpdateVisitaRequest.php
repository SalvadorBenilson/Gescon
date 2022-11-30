<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVisitaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'autorizado' => 'required|boolean',
            'data_entrada' => 'required|date',
            'data_saida' => 'required|date',
            'residencia_id' => 'required|int',
            'usuario_id' => 'required|int',
        ];
    }
}
