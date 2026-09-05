<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Address_shipping;
use App\Http\Requests\Address_shippingRequest;  
use App\Models\Customer;
use App\Models\Order_line;
use illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class Address_shippingController extends Controller
{

    public function index()
    {
        $address_shippings = Address_shipping::with("customer")->get();
        return view("address_shippings.index", compact("address_shippings"));
    }

     
    public function create()
    {
        $address_shipping = new Address_shipping();
        $customers = Customer::all();
        return view('address_shippings.create',compact('address_shipping','customers'));
    }

    public function store(Address_shippingRequest $request)
    {
        Address_shipping::create($request->validated());
        return redirect()->route('address_shippings.index')->with('success', 'Dirección de envío creada correctamente.');
    }

    public function show(Address_shipping $address_shipping)
    {
        $address_shipping = Address_shipping::with('customer')->findOrFail($address_shipping->id);
        return view('address_shippings.show', compact('address_shipping'));
    }
    
    public function edit(string $id)
    {
        $address_shipping = Address_shipping::with('customer')->findOrFail($id);
        $customers = Customer::all();
        return view('address_shippings.edit', compact('address_shipping', 'customers'));
    }

     
    public function update(Address_shippingRequest $request, string $id): RedirectResponse
    {
        $address_shipping = Address_shipping::with('customer')->findOrFail($id);
        $address_shipping->update($request->validated());
        return redirect()->route('address_shippings.index')->with('success', 'Dirección de envío actualizada correctamente.');
    }
    

    public function destroy(string $id)
    {
        $address_shipping = Address_shipping::with('customer')->findOrFail($id);
        $address_shipping->delete();
        return redirect()->route('address_shippings.index')->with('success', 'Dirección de envío eliminada correctamente.');
    }
}