<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name'=>'string|required|min:3|max:20',
            'email'=>'string|required|min:3|max:30|unique:customers,email,' . $this->route('customers'),
            'telephone'=>'integer|required|unique:customers,telephone,' . $this->route('customers'),
            'balance'=>'required',
            'credit_limit'=>'required',
            'discount'=>'string|required|min:1|max:25',
            'date_record'=>'date|required',
            'state_customer'=>'string|required|min:3|max:30',
        ];
    }

    public function messages():array

    {
        return[

            'name.string'=>'El nombre solo permite caracteres',
            'name.required'=>'El campo es requerido',
            'name.min'=>'El minimo de caractesres es 3',
            'name.max'=>'El maximo de caracteres es 20',

            'email.string'=>'El correo solo permite caracteres',
            'email.required'=>'El campo es requerido',
            'email.min'=>'El minimo de caractesres es 3',
            'email.max'=>'El maximo de caracteres es 30',

            'telephone.integer'=>'El campo solo permite numeros enteros',
            'telephone.required'=>'El campo es requerido',
            'telephone.unique'=>'El numero debe ser unico',

            
            'balance.required'=>'El balance es requerido',


            'credit_limit.required'=>'El Límite de crédito es requerido',

            'discount.string'=>'El campo descuento solo permite caracteres',
            'discount.required'=>'El campo es requerido',
            'discount.min'=>'El minimo de caracteres es 1',
            'discount.max'=>'El maximo de caracteres es 25',

            'date_record.date'=>'El campo solo permite fecha de ingreso',
            'date_record.required'=>'El campo es requerido',
            'date.date'=>'fecha',

            'state_customer.string'=>'El campo solo permite caracteres',
            'state_customer.required'=>'El campo es requerido',
            'state_customer.min'=>'El minimo de caractesres es 3',
            'state_customer.max'=>'El maximo de caracteres es 30',

            
        ];
    }
}