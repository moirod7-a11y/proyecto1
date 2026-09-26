<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'customer_id'=>"required",
            'address_shipping_id'=>"required",
            'date_create'=>"date|required",
            'subtotal'=>"required",
            'iva'=>"required",
            'total_general'=>"required",
            'additional_notes'=>"string|required|min:3|max:20",
            'state_order'=>"string|required||min:3|max:20",
        ];
    }

    public function messages():array
    {
        return[
            'customer_id.required'=>'El campo  de cliente es requerido',
            
            'address_shipping_id.required'=>'El campo de direcciones es requerido',

            'date_create.date'=>'El campo solo permite fecha de creacion',
            'date_create.required'=>'El campo de fecha es requerido',
            
            
            'subtotal.required'=>'El campo de subtotal es requerido',

            
            'iva.required'=>'El campo de iva es requerido',


            'total_general.required'=>'El campo de total general es requerido',

            'additional_notes.string'=>'las notas adicionales solo permite caracteres',
            'additional_notes.required'=>'El campo de notas adicionales es requerido',
            'additional_notes.min'=>'El minimo de caracteres es 3',
            'additional_notes.max'=>'El maximo de caracteres es 20',

            'state_order.string'=>'el estado del pedido solo permite caracteres',
            'state_order.required'=>'El campo de estado del pedido es requerido',
            'state_order.min'=>'El minimo de caracteres es 3',
            'state_order.max'=>'El maximo de caracteres es 20',

        ];
    }
}