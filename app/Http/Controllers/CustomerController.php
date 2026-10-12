<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;    
use App\Http\Requests\CustomerRequest;

class CustomerController extends Controller
{
    public function index()
    {
        // Obtiene todos los clientes ordenados del más nuevo al más viejo
        $customers = Customer::orderByDesc("id")->get();
        return view("customers.index", compact("customers"));
    }

    public function create()
    {
        // CORRECCIÓN MENOR: Cambié la variable a singular ($customer) 
        // ya que solo estamos creando un cliente en blanco, no varios.
        $customer = new Customer();
        return view("customers.create", compact("customer"));
    }

    public function store(CustomerRequest $request)
    {
        // Crea el cliente usando solo los datos que pasaron la validación
        Customer::create($request->validated());
        return redirect()->route("customers.index")->with("success", "El cliente se ha creado correctamente.");
    }

    public function show(string $id)
    {
        $customer = Customer::findOrFail($id);
        return view("customers.show", compact("customer"));
    }

    public function edit(string $id)
    {
        $customer = Customer::findOrFail($id);
        return view("customers.edit", compact("customer"));
    }

    // CORRECCIÓN PRINCIPAL AQUÍ:
    // Antes decía: public function update(CustomerRequest $request, Customer $customer)
    // Ahora dice: public function update(CustomerRequest $request, string $id)
    // 
    // ¿Por qué? Porque tus rutas envían un texto (ID), no el modelo completo.
    // Al igualarlo a las funciones de arriba, Laravel ya no se confunde.
    
    public function update(CustomerRequest $request, string $id)
    {
        // 1. Primero, buscamos en la base de datos el cliente real usando su ID
        $customer = Customer::findOrFail($id);
        
        // 2. Luego, actualizamos ese cliente con los datos limpios del formulario
        $customer->update($request->validated());
        
        // 3. Finalmente, redirigimos a la tabla principal con un mensaje de éxito
        return redirect()->route("customers.index")->with("success", "El cliente se ha actualizado correctamente.");
    }
    
    public function destroy(string $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route("customers.index")->with("success", "El cliente se ha eliminado correctamente.");
    }
}