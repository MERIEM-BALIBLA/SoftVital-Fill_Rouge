<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
        $rules = [
            'nom' => 'required|min:4',
            'cin' => 'required|unique:users',
            'numero' => 'required|digits:10',
            'ville' => 'required',
            'role' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:4|confirmed',
        ];

        // Ajouter des règles spécifiques au médecin si le rôle est "medecin"
        if ($this->input('role') === 'medecin') {
            $rules['specialite'] = 'required|string';
            $rules['cabinet'] = 'required|string';
            $rules['adresse_cabinet'] = 'required|string';
        }

        return $rules;
    }


    public function message(): array
    {
        return [
            'nom.required' => 'ce champ doit etrev remplit',
            'cin.required' => 'ce champ doit etrev remplit',
            'numero.required' => 'ce champ doit etrev remplit',
            'ville.required' => 'ce champ doit etrev remplit',
            'role.required' => 'ce champ doit etrev remplit',



            'email.required' => 'ce champ doit etrev remplit',
            'password.required' => 'ce champ doit etrev remplit',
            'password_confirmation.required' => 'ce champ doit etrev remplit',

        ];

        if ($this->input('role') === 'medecin') {

        }
    }
}
