<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel Principal (Dashboard)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Tarjeta: Módulo de Clientes -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-indigo-500">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Clientes</h3>
                    <p class="text-sm text-gray-600 mb-4">Gestiona el catálogo de clientes y sus datos de contacto.</p>
                    <div class="flex space-x-2">
                        <a href="{{ route('customers.index') }}" class="px-3 py-2 bg-indigo-600 text-white text-xs font-semibold rounded hover:bg-indigo-700">
                            Ver Listado
                        </a>
                        <a href="{{ route('customers.create') }}" class="px-3 py-2 bg-gray-100 text-gray-700 text-xs font-semibold rounded hover:bg-gray-200">
                            + Nuevo
                        </a>
                    </div>
                </div>

                <!-- Tarjeta: Módulo de Artículos -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-blue-500">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Artículos</h3>
                    <p class="text-sm text-gray-600 mb-4">Control de productos e inventario por fábrica.</p>
                    <span class="inline-block px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded">En construcción</span>
                </div>

                <!-- Tarjeta: Módulo de Pedidos -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-green-500">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Pedidos</h3>
                    <p class="text-sm text-gray-600 mb-4">Registro y seguimiento de órdenes de compra.</p>
                    <span class="inline-block px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded">En construcción</span>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>