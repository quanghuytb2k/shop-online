<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|unique:products|string|max:255',
            'price' => 'required|integer',
            'old_price' => 'required|integer',
            'content' => 'required|string',
            'number'=> 'required|integer',
            'cat' => 'required',
            'file' => 'required',
        ];
    }
}
