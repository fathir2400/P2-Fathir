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
    public function rules()
{
    return [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'telepon' => 'required|string|max:15',
        'jenkel' => 'required|in:Laki-laki,Perempuan',
        'role' => 'required|in:admin,kasir,supervisor,waiters,kitchen,pelanggan',
        'password' => 'required|string|min:6|confirmed',
        'foto_profile' => 'nullable|image|mimes:jpg,jpeg,png',
        'outlet_id' => 'required|exists:outlets,id', // <-- Tambahkan baris ini
    ];
}


}
