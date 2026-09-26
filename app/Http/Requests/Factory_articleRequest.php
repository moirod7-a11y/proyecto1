<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class Factory_articleRequest extends FormRequest
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
            'current_stock'=>'integer|required',
            'negotiation_cost'=>'integer|required',
            'date_estimated'=>"date|required|",
        ];
    }

    public function messages():array
    {
        return[
            
            'article_id.required'=>'El campo es requerido',

            'current_stock.integer'=>'El campo solo permite numeros enteros',
            'current_stock.required'=>'El campo es requerido',
            'current_stock.unsigned'=>'El campo solo permite numeros enteros',

            'negotiation_cost.integer'=>'El costo de negociacion solo permite numeros enteros',
            'negotiation_cost.required'=>'El campo es requerido',
            'negotiation_cost.unsigned'=>'El campo solo permite numeros enteros',

            'date_estimated.date'=>'El campo solo permite fecha estimada',
            'date_estimated.required'=>'El campo es requerido'

        ];
    }
}
