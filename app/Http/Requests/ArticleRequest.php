<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    
    public function rules(): array
    {
        return [
            'code_internal' => 'required|string|min:4|max:20',
            'description'   => 'required|string|min:3|max:200',
            'price'         => 'required|numeric|min:0',
            'cost'          => 'required|numeric|min:0',
            'state'         => 'required|string|min:3|max:30',
            'date_record'   => 'required|date',
        ];
    }

    public function messages(): array
    {
        return [
            'code_internal.string'   => 'El campo solo permite caracteres',
            'code_internal.required' => 'El campo es requerido',
            'code_internal.min'      => 'El minimo de caractesres es 4',
            'code_internal.max'      => 'El maximo de caracteres es 20',

            'description.string'     => 'La descripcion solo permite caracteres',
            'description.required'   => 'El campo es requerido',
            'description.min'        => 'El minimo de caractesres es 3',
            'description.max'        => 'El maximo de caracteres es 200',

            'price.required'         => 'El campo es requerido',

            'cost.required'          => 'El campo es requerido',

            'state.string'           => 'El estado solo permite caracteres',
            'state.required'         => 'El campo es requerido',
            'state.min'              => 'El minimo de caractesres es 3',
            'state.max'              => 'El maximo de caracteres es 30',

            'date_record.date'       => 'El campo solo permite fecha de ingreso',
            'date_record.required'   => 'El campo es requerido',
        ];
    }
}