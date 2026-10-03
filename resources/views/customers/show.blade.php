<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-100 leading-tight tracking-tight">
                {{ __('Ver Clientes') }}
            </h2>
            <a href="{{ route('customers.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-700 border border-transparent rounded-xl font-semibold text-xs text-gray-800 dark:text-gray-200 uppercase tracking-widest hover:bg-gray-300 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 shadow-sm">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Volver a la lista
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 dark:border-gray-700 p-8">
                
                <div class="mb-6">
                    <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">Nombre del cliente</h3>
                    <p class="text-lg font-semibold text-gray-900 dark:text-white">{{ $customer->name }}</p>
                </div>

                <div class="mt-8 border-t border-gray-100 dark:border-gray-700 pt-6">
                    <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">Correo electrónico</h3>
                    <div class="text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-gray-900/50 p-4 rounded-xl border border-gray-100 dark:border-gray-700 min-h-[100px]">
                        {{ $customer->email ?? 'Este cliente no tiene correo electrónico registrado.' }}
                    </div>
                </div>

                <div class="mt-8 border-t border-gray-100 dark:border-gray-700 pt-6">
                    <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">Teléfono</h3>
                    <div class="text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-gray-900/50 p-4 rounded-xl border border-gray-100 dark:border-gray-700 min-h-[100px]">
                        {{ $customer->telephone ?? 'Este cliente no tiene teléfono registrado.' }}
                    </div>
                </div>

                <div class="mt-8 border-t border-gray-100 dark:border-gray-700 pt-6">
                    <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">Saldo</h3>
                    <div class="text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-gray-900/50 p-4 rounded-xl border border-gray-100 dark:border-gray-700 min-h-[100px]">
                        {{ $customer->balance ?? 'Este cliente no tiene saldo registrado.' }}
                    </div>
                </div>

                <div class="mt-8 border-t border-gray-100 dark:border-gray-700 pt-6">
                    <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">Límite de crédito</h3>
                    <div class="text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-gray-900/50 p-4 rounded-xl border border-gray-100 dark:border-gray-700 min-h-[100px]">
                        {{ $customer->credit_limit ?? 'Este cliente no tiene límite de crédito registrado.' }}
                    </div>
                </div>

                <div class="mt-8 border-t border-gray-100 dark:border-gray-700 pt-6">
                    <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">Descuento</h3>
                    <div class="text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-gray-900/50 p-4 rounded-xl border border-gray-100 dark:border-gray-700 min-h-[100px]">
                        {{ $customer->discount ?? 'Este cliente no tiene descuento registrado.' }}
                    </div>
                </div>

                <div class="mt-8 border-t border-gray-100 dark:border-gray-700 pt-6">
                    <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">fecha registro</h3>
                    <div class="text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-gray-900/50 p-4 rounded-xl border border-gray-100 dark:border-gray-700 min-h-[100px]">
                        {{ $customer->date_record ?? 'Este cliente no tiene fecha de registro registrada.' }}
                    </div>
                </div>

                <div class="mt-8 border-t border-gray-100 dark:border-gray-700 pt-6">
                    <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">Estado del Cliente</h3>
                    <div class="text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-gray-900/50 p-4 rounded-xl border border-gray-100 dark:border-gray-700 min-h-[100px]">
                        {{ $customer->state_customer?? 'Este cliente no tiene estado registrado.' }}
                    </div>
                </div>


                <div class="flex items-center justify-end gap-4 mt-8 pt-6 border-t border-gray-100 dark:border-gray-700">
                    <form action="{{ route('customers.destroy', $customer) }}" method="POST" class="inline" id="form-delete-{{ $customer->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="confirmarEliminacion({{ $customer->id }})" class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-red-200 dark:border-red-900/50 rounded-xl font-semibold text-xs text-red-600 dark:text-red-400 uppercase tracking-widest shadow-sm hover:bg-red-50 dark:hover:bg-red-900/20 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Eliminar
                        </button>
                    </form>

                    <a href="{{ route('customers.edit', $customer) }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 transition ease-in-out duration-150 shadow-lg shadow-indigo-500/30">
                        Editar Cliente
                    </a>
                </div>

            </div>
        </div>
    </div>

    <script>
        function confirmarEliminacion(id) {
            Swal.fire({
                title: '¿Eliminar de forma permanente?',
                text: "Esta acción no se puede deshacer.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#4f46e5',
                cancelButtonColor: '#ef4444',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar',
                background: '#1e293b',
                color: '#ffffff',
                customClass: {
                    popup: 'rounded-2xl border border-gray-700'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('form-delete-' + id).submit();
                }
            })
        }
    </script>
</x-app-layout>