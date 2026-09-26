<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class FactoryRequest extends FormRequest
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
            'company_name'=>'string|required|min:3|max:30',
            'identification_card'=>'string|required|min:3|max:30|unique:factories,identification_card,' . $this->route('factories'),
            'telephone'=>'integer|required|unique:factories,telephone,' . $this->route('factories'),
            'email'=>'string|required|min:3|max:20|unique:factories,email,' . $this->route('factories'),
            'address'=>'string|required|min:3|max:40',
            'state_supplier'=>'string|required|min:3|max:50',
        ];
    }

    public function messages():array
    {
        return[

            'company_name.string'=>'El nombre de la compañia solo permite caracteres',
            'company_name.required'=>'El campo es requerido',
            'company_name.min'=>'El minimo de caractesres es 3',
            'company_name.max'=>'El maximo de caracteres es 30',

            'identification_card.string'=>'La cedula de identidad solo permite caracteres',
            'identification_card.required'=>'El campo es requerido',
            'identification_card.min'=>'El minimo de caractesres es 3',
            'identification_card.max'=>'El maximo de caracteres es 30',

            'telephone.integer'=>'El campo solo permite numeros enteros',
            'telephone.required'=>'El campo es requerido',
            'telephone.unique'=>'El numero debe ser unico',

            'email.string'=>'El correo solo permite caracteres',
            'email.required'=>'El campo es requerido',
            'email.min'=>'El minimo de caractesres es 3',
            'email.max'=>'El maximo de caracteres es 20',

            'address.string'=>'La direccion solo permite caracteres',
            'address.required'=>'El campo es requerido',
            'address.min'=>'El minimo de caractesres es 3',
            'address.max'=>'El maximo de caracteres es 40',

            'state_supplier.string'=>'El campo solo permite caracteres',
            'state_supplier.required'=>'El campo es requerido',
            'state_supplier.min'=>'El minimo de caractesres es 3',
            'state_supplier.max'=>'El maximo de caracteres es 50',


        ];
    }
}