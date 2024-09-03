<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePelanggarRequest extends FormRequest
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
            'identitas' => 'required',
            'keterangan' => 'nullable',
            'file' => 'nullable|file|mimes:jpg,jpeg,png|max:5120',
        ];
    }
    public function messages()
    {
        return [
            'identitas.required' => 'The identity field is required.',
            'file.mimes' => 'Only JPG, JPEG, and PNG files are allowed.',
            'file.max' => 'The file may not be greater than 5MB.',
        ];
    }
}
