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
        return [
            'nom' => 'required',
            'cin' => 'required',
            'numero' => 'required',
            'ville' => 'required',
            'role' => 'required|string',
            'email' => 'required',
            'password' => 'required',
            'password_confirmation'=>'required',
        ];

        // medecin
        if ($this->input('role') === 'medecin') {
            $rules['specialite'] = 'required|string';
            $rules['cabinet'] = 'required|string';
            $rules['adresse_cabinet'] = 'required|string';
        }
    }

    public function message(): array{
        return[
            'nom.required'=>'ce champ doit etrev remplit',
            'cin.required'=>'ce champ doit etrev remplit',
            'numero.required'=>'ce champ doit etrev remplit',
            'ville.required'=>'ce champ doit etrev remplit',


            'email.required'=>'ce champ doit etrev remplit',
            'password.required'=>'ce champ doit etrev remplit',
            'password_confirmation.required'=>'ce champ doit etrev remplit',

        ];

        if ($this->input('role') === 'medecin') {

        }
    }
}
