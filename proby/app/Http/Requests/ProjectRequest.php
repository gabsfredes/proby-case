<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'status' => 'required|in:Em Andamento,Concluído,Pendente',
            'start_date' => 'required|date',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'O campo nome do projeto é obrigatório.',
            'status.required' => 'O campo status é obrigatório.',
            'status.in' => 'O status do projeto deve ser Em Andamento, Concluído ou Pendente.',
            'start_date.required' => 'O campo data de início é obrigatório.',
        ];
    }
}
