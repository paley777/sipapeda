<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePelaporanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'lembaga' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'keterangan' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'lembaga.required' => 'Lembaga field is required.',
            'nama.required' => 'Nama field is required.',
            'alamat.required' => 'Alamat field is required.',
            'keterangan.required' => 'Keterangan field is required.',
        ];
    }
}
