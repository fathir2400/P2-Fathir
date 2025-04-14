<?php

namespace App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
           
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'telepon' => 'nullable|min:6',
            'alamat' => 'required|min:6',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
            'foto_profile'          => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
