<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClasificacionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'clasificacion' => 'required|max:255|unique:clasificaciones,clasificacion,'.$this->clasificacion->id,
        ];
    }

    public function messages(): array {
        return [
            'clasificacion.required' => 'El campo nombre de la clasificación es obligatorio.',
            'clasificacion.max' => 'La clasificación solo puede contener 255 caracteres.',
            'clasificacion.unique' => 'El nombre de la clasificación ya esta registrado.',
        ];
    }
}
