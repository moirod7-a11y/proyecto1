<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class Address_ShippingRequest extends FormRequest
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
            'number'=>"required",
            'street'=>"string|required||min:3|max:20",
            'neighborhood'=>"string|required||min:3|max:20",
            'city'=>"string|required||min:3|max:20",
            'reference_location'=>"string|required||min:3|max:30",
            'state_address'=>"string|required||min:3|max:20"
        ];
    }
    public function messages(): array
    {
        return[
            
            'customer_id' => 'required|exists:customers,id',
            'number' => 'required|string|max:255',
            'street' => 'required|string|max:255',

            'number.required'=>'El campo es requerido',

            'street.string'=>'El nombre de la calle solo permite caracteres',
            'street.required'=>'El campo es requerido',
            'street.min'=>'El minimo de caractesres es 3',
            'street.max'=>'El maximo de caracteres es 20',

            'neighborhood.string'=>'El nombre del barrio solo permite caracteres',
            'neighborhood.required'=>'El campo es requerido',
            'neighborhood.min'=>'El minimo de caractesres es 3',
            'neighborhood.max'=>'El maximo de caracteres es 20',

            'city.string'=>'El nombre de la ciudad solo permite caracteres',
            'city.required'=>'El campo es requerido',
            'city.min'=>'El minimo de caractesres es 3',
            'city.max'=>'El maximo de caracteres es 20',

            'reference_location.string'=>'La refencia de ubicacion solo permite caracteres',
            'reference_location.required'=>'El campo es requerido',
            'reference_location.min'=>'El minimo de caractesres es 3',
            'reference_location.max'=>'El maximo de caracteres es 30',

            'state_address.string'=>'El estado de la direccion solo permite caracteres',
            'state_address.required'=>'El campo es requerido',
            'state_address.min'=>'El minimo de caractesres es 3',
            'state_address.max'=>'El maximo de caracteres es 20',

        ];
    }
}