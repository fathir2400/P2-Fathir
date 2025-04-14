<?php

namespace App\Http\Requests\Request;

use App\Http\Controllers\SettingController;
use Illuminate\Foundation\Http\FormRequest;

class SettingRequestUpdate extends FormRequest
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
            'nama_sekolah' => 'nullable|max:255',
            'email' => 'nullable|',
            'alamat' => 'nullable|',
            'telepon' => 'nullable|min:6',
            'kode_post' => 'nullable|',
            'logo'          => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
