<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factory;
use App\Http\Requests\FactoryRequest;

class FactoryController extends Controller
{
  
    public function index()
    {
        $factories = Factory::orderByDesc("id")->get();
        return view("factories.index", compact("factories"));
    }

    public function create()
    {
        $factories = new Factory();
        return view("factories.create", compact("factories"));
    }

    public function store(FactoryRequest $request)
    {
        Factory::create($request->validated());
        return redirect()->route("factories.index")->with("success", "La fábrica se ha creado correctamente.");
    }

    public function show(string $id)
    {
        $factory = Factory::findOrFail($id);
        return view("factories.show", compact("factory"));
    }

    public function edit(string $id)
    {
        $factory = Factory::findOrFail($id);
        return view("factories.edit", compact("factory"));
    }

    public function update(FactoryRequest $request, Factory $factory)
    {
        $factory->update($request->validated());
        return redirect()->route("factories.index")->with("success", "La fábrica se ha actualizado correctamente.");
    }

   
    public function destroy(string $id)
    {
        $factory = Factory::findOrFail($id);
        $factory->delete();
        return redirect()->route("factories.index")->with("success", "La fábrica se ha eliminado correctamente.");
    }
}