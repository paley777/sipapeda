<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePergubRequest extends FormRequest
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
            'produk_hukum' => 'required|unique:pergubs,produk_hukum',
            'sanksi' => 'nullable',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
        ];
    }
    public function messages()
    {
        return [
            'produk_hukum.required' => 'The product law field is required.',
            'produk_hukum.unique' => 'This product law has already been registered.',
            'file.mimes' => 'Only PDF, DOC, and DOCX files are allowed.',
            'file.max' => 'The file may not be greater than 5MB.',
        ];
    }
}
