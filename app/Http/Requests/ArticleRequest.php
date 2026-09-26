<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'code_internal'=>"string|required||min:4|max:20",
            'description'=>"string|required||min:3|max:50",
            'price'=>"required",
            'cost'=>"required",
            'state'=>"string|required||min:3|max:30",
            'date_record'=>"date|required",
        ];
    }

    public function messages():array
    {
        return[
            'code_internal.string'=>'El campo solo permite caracteres',
            'code_internal.required'=>'El campo es requerido',
            'code_internal.min'=>'El minimo de caractesres es 4',
            'code_internal.max'=>'El maximo de caracteres es 20',

            'description.string'=>'La descripcion solo permite caracteres',
            'description.required'=>'El campo es requerido',
            'min.integer'=>'El minimo de caractesres es 3',
            'max.integer'=>'El maximo de caracteres es 50',

           
            'price.required'=>'El campo es requerido',

           
            'cost.required'=>'El campo es requerido',

            'state.string'=>'El estado solo permite caracteres',
            'state.required'=>'El campo es requerido',
            'state.min'=>'El minimo de caractesres es 3',
            'state.max'=>'El maximo de caracteres es 30',

            'date_record.date'=>'El campo solo permite fecha de ingreso',
            'date_record.required'=>'El campo es requerido',
            

        ];
    }
}
