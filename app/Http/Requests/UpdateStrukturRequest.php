<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStrukturRequest extends FormRequest
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
            'jabatan' => 'required',
            'nama' => 'required',
            'nip' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'jabatan.required' => 'Jabatan field is required.',
            'nama.required' => 'Nama field is required.',
            'nip.required' => 'NIP field is required.',
        ];
    }
}
