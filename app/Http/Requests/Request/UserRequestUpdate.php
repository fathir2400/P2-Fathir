<?php

namespace App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;

class UserRequestUpdate extends FormRequest
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

            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|unique:users,email',
            'telepon' => 'nullable|string|max:15',
            'jenkel' => 'nullable|in:Laki-laki,Perempuan',
            'role' => 'nullable|in:admin,kasir,owner',
            'password' => 'sometimes|nullable|min:8|confirmed',
            'password_confirmation' => 'sometimes|min:8',
           'foto_profile' => 'nullable|image|mimes:jpg,jpeg,png',
        'outlet_id' => 'nullable|exists:outlets,id',
        ];
    }
}
