<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRerollRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|gt:0',
            'account_level' => 'required|numeric|gt:0',
            'platform' => 'required|string|max:255',
            'server' => 'required|string|in:أسيا,أمريكا,اوروبا,الكل',
            'description' => 'required|string',
            'source' => 'required|string|url',
            'picture' => 'file|mimes:jpg,png,jpeg,webp',
        ];

    }
}
