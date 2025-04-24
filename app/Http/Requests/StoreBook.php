<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBook extends FormRequest
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
            'name' => 'string |required|min:2', 
            'category' => 'string |required|min:2', 
            'price' => 'integer|required', 
            'quantity' =>'integer|required' ,
            'imgpath' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048' ,
        ];
    }
}
