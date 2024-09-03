<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
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
            'judul' => 'required',
            'kreator' => 'required',
            'konten' => 'required',
            'slug' => 'nullable',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ];
    }
    public function messages()
    {
        return [
            'judul.required' => 'The Judul field is required.',
            'kreator.required' => 'The Kreator field is required.',
            'konten.required' => 'The Konten field is required.',
            'thumbnail.mimes' => 'Only Image files are allowed.',
            'thumbnail.max' => 'The file may not be greater than 5MB.',
        ];
    }
}
