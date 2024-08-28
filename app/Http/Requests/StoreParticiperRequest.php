<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreParticiperRequest extends FormRequest
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
            'datcontribu' => 'required|date',
            'motifcontr' => 'required|string',
            'heure' => 'required|string',
            'montant' => 'required|string',
            'modeparticipat' => 'required|string',
            'observation' => 'string|nullable',
            'numaid' => 'required|integer',
            'iddonat' => 'required|integer',
        ];
    }
}
