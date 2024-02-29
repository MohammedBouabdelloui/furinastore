<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductOrderRequest extends FormRequest
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
            'user_id' => 'required|numeric',
            'ordered_item_id' => 'required|numeric',
            'ordered_table_type' => 'required|string',
            'value_chosen' => 'numeric|gt:0',
            'price' => 'required|numeric|gt:0',
            'server' => 'in:europe,america,asia',
            'genshinAccountId' => 'numeric',
            'quantity_chosen' => 'numeric|gt:0',
        ];
        
    }
}
