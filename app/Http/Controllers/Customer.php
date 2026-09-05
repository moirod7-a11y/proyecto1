<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;    
use App\Http\Requests\CustomerRequest;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::orderByDesc("id")->get();
        return view("customers.index", compact("customers"));
    }

    public function create()
    {
        $customers = new Customer();
        return view("customers.create", compact("customers"));
    }

    public function store(CustomerRequest $request)
    {
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

    public function update(CustomerRequest $request, Customer $customer)
    {
        $customer->update($request->validated());
        return redirect()->route("customers.index")->with("success", "El cliente se ha actualizado correctamente.");
    }
    
    public function destroy(string $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route("customers.index")->with("success", "El cliente se ha eliminado correctamente.");
    }
}