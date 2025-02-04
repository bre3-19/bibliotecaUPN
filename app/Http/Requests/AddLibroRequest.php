<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddLibroRequest extends FormRequest
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
            'titulo' => 'required|max:255',
            'cantidad' => 'required|numeric|min:1',
            'autor' => 'required|max:255',
            'anio' => 'required||numeric',
            'tipo' => 'required|max:255',   
            'imagen' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ];
    }

    public function messages(): array {
        return [
            'titulo.required' => 'El campo titulo es obligatorio.',
            'titulo.max' => 'El titulo solo puede contener 255 caracteres.',
            'cantidad.required' => 'El campo cantidad es obligatorio.',
            'cantidad.numeric' => 'La cantidad debe ser un valor númerico.',
            'cantidad.min' => 'Debe agregar por lo menos 1 ejemplar.',
            'autor.required' => 'El campo autor es obligatorio.',
            'autor.max' => 'El autor solo puede contener 255 caracteres.',
            'anio.required' => 'El campo año es obligatorio.',
            'anio.max' => 'El año debe ser un valor númerico.',
            'tipo.required' => 'El campo tipo es obligatorio.',
            'tipo.max' => 'El tipo solo puede contener 255 caracteres.',
        ];
    }
}
