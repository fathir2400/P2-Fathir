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
            'telepon' => 'nullable|min:6',
            'email' => 'nullable|',
            'telepon' => 'nullable|min:6',
            'alamat' => 'nullable|',
            'password' => 'sometimes|nullable|min:8|confirmed',
            'password_confirmation' => 'sometimes|min:8',
            'status' => 'nullable',
            'foto_profile'          => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'role' => 'nullable'
        ];
    }
}
