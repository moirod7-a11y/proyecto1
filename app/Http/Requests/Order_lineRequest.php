<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class Order_lineRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'article_id'=>"required",
            'quantity'=>'integer|required',
            'price'=>"required",
            'subtotal_line'=>"required",
        ];
    }

    public function messages():array
    {
        return[
            
            'article_id.required'=>'El campo es requerido',

            'quantity.integer'=>'El campo solo permite numeros enteros',
            'quantity.required'=>'El campo es requerido',
            'quantity.unsigned'=>'El campo solo permite numeros enteros',

            
            'price.required'=>'El campo es requerido',

            'subtotal_line.required'=>'El campo es requerido',
            
        ];
    }
}