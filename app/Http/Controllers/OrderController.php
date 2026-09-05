<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Http\Requests\OrderRequest;
use App\Models\Customer;
use App\Models\Address_shipping;
use Illuminate\Http\RedirectResponse; 
use Illuminate\View\View;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with("customer")->get();
        return view("orders.index", compact("orders"));
    }
    
    public function create()
    {
        $order = new Order();
        $customers = Customer::all();
        
        $addresses = Address_shipping::all(); 
        
        return view('orders.create', compact('order', 'customers', 'addresses'));
    }

    public function store(OrderRequest $request)
    {
        Order::create($request->validated());
      
        return redirect()->route('orders.index')->with('success', 'La orden ha sido creada correctamente.');
    }

    public function show(Order $order)
    {
        $order = Order::with('customer')->findOrFail($order->id);
        return view('orders.show', compact('order'));
    }

    public function edit(string $id)
    {
        $order = Order::with('customer')->findOrFail($id);
        $customers = Customer::all();
        
        $addresses = Address_shipping::all(); 
        
        return view('orders.edit', compact('order', 'customers', 'addresses'));
    }

    public function update(OrderRequest $request, string $id): RedirectResponse
    {
        $order = Order::with('customer')->findOrFail($id);
        $order->update($request->validated());
        
        return redirect()->route('orders.index')->with('success', 'La orden ha sido actualizada correctamente.');
    }
    
    public function destroy(string $id)
    {
        $order = Order::with('customer')->findOrFail($id);
        $order->delete();
        
        return redirect()->route('orders.index')->with('success', 'La orden ha sido eliminada correctamente.');
    }
}