<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreCondominioRequest extends FormRequest
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
        $usuario = Auth::user()->id;
        return [
            'nome' => 'required|string|max:50',
            'provincia' => 'required|string|max:15',
            'municipio' => 'required|string|max:30',
            'bairro' => 'required|string|max:30',
            'descrisao' => 'string',
            'users_id' =>  $usuario,
        ];
    }
}
