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
        // Esto garantiza que obtengamos el ID numérico sin importar qué nos envíe Laravel
        $cliente = $this->route('customer');
        $id = is_object($cliente) ? $cliente->id : $cliente;

        return [
            'name'           => 'required|string|min:3|max:50',
            'email'          => 'required|string|max:50|unique:customers,email,' . $id,
            'telephone'      => 'required|numeric|unique:customers,telephone,' . $id,
            'balance'        => 'required|numeric',
            'credit_limit'   => 'required|numeric',
            'discount'       => 'required|numeric',
            'date_record'    => 'required|date',
            'state_customer' => 'required|string|min:3|max:30',
        ];
    }

    public function messages(): array
    {
        return [
            'name.string' => 'El nombre solo permite caracteres',
            'name.required' => 'El campo es requerido',
            'name.min' => 'El mínimo de caracteres es 3',
            'name.max' => 'El máximo de caracteres es 20',

            'email.string' => 'El correo solo permite caracteres',
            'email.required' => 'El campo es requerido',
            'email.max' => 'El máximo de caracteres es 50',
            'email.unique' => 'El correo ya está registrado',

            'telephone.numeric' => 'El campo solo permite números',
            'telephone.required' => 'El campo es requerido',
            'telephone.unique' => 'El número debe ser único',

            'balance.required' => 'El balance es requerido',
            'balance.numeric' => 'El balance debe ser numérico',

            'credit_limit.required' => 'El límite de crédito es requerido',
            'credit_limit.numeric' => 'El límite de crédito debe ser numérico',

            'discount.required' => 'El campo es requerido',
            'discount.numeric' => 'El descuento debe ser numérico',

            'date_record.date' => 'El campo solo permite fecha de ingreso',
            'date_record.required' => 'El campo es requerido',

            'state_customer.string' => 'El campo solo permite caracteres',
            'state_customer.required' => 'El campo es requerido',
            'state_customer.min' => 'El mínimo de caracteres es 3',
            'state_customer.max' => 'El máximo de caracteres es 30',
        ];
    }
}