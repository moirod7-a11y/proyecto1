<x-app-layout>
    <x-slot name="header">
    <div class="flex items-center justify-between">
        <h2 class="font-semibold text-2x1 text-gray-800 leading-tight tracking-tight">
            {{ __('crear_cliente') }}
        </h2>
        <a hidden href="{{ route('customers.index') }}" class="text-sm text-gray-500 hover:text-indigo-600 transition-colors font-medium">
            volver a la lista
        </a>
    </div>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-x1 sm:rounded-2x1 border border-gray-200">
                
            <form action="{{ route('customers.store') }}" method="POST" novalidate>
                @csrf

                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nombre del cliente</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" maxlength="50" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web">
                    @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Correo electrónico</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" maxlength="50" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web">
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="telephone" class="block text-sm font-medium text-gray-700 mb-2">Teléfono</label>
                    <input type="number" id="telephone" name="telephone" value="{{ old('telephone') }}" maxlength="15" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web">
                    @error('telephone')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="balance" class="block text-sm font-medium text-gray-700 mb-2">Saldo</label>
                    <input type="number" id="balance" name="balance" value="{{ old('balance') }}" step="0.01" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web">
                    @error('balance')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="credit_limit" class="block text-sm font-medium text-gray-700 mb-2">Límite de crédito</label>
                    <input type="text" id="credit_limit" name="credit_limit" value="{{ old('credit_limit') }}" step="0.01" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web">
                    @error('credit_limit')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="discount" class="block text-sm font-medium text-gray-700 mb-2">Descuento</label>
                    <input type="text" id="discount" name="discount" value="{{ old('discount') }}" step="0.01" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web">
                    @error('discount')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="date_record" class="block text-sm font-medium text-gray-700 mb-2">Fecha de registro</label>
                    <input type="date" id="date_record" name="date_record" value="{{ old('date_record') }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web">
                    @error('date_record')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="state_customer" class="block text-sm font-medium text-gray-700 mb-2">Estado del cliente</label>
                    <input type="text" id="state_customer" name="state_customer" value="{{ old('state_customer') }}" class="w-full rounded-xl border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-20 shadow-sm transition-colors" placeholder="Ej. Desarrollo Web">
                    @error('state_customer')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>


            <div class="flex items-center justify-end gap-4 mt-8 pt-6 border-t border-gray-100">
                        <a href="{{ route('customers.index') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-xl font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
                            Cancelar
                        </a>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 shadow-lg shadow-indigo-500/30">
                            Guardar Cliente     
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
