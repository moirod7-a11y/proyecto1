<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight tracking-tight">
                {{ __('Ver Orden') }}
            </h2>
            <a href="{{ route('orders.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-200 border border-transparent rounded-xl font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition ease-in-out duration-150 shadow-sm">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Volver a la lista
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 p-8">
                
                <div class="mb-6">
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-2">Fecha de creación</h3>
                    <p class="text-lg font-semibold text-gray-900">{{ $order->date_create }}</p>
                </div>

                <div class="mb-6 border-t border-gray-100 pt-6">
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-2">Cliente</h3>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                        {{ $order->customer->name ?? 'Sin cliente' }}
                    </span>
                </div>

                <div class="mb-6 border-t border-gray-100 pt-6">
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-2">Direccion de envio</h3>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                        {{ $order->address_shipping->name ?? 'Sin direccion de envio' }}
                    </span>
                </div>

                <div class="mt-8 border-t border-gray-100 pt-6">
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-2">Subtotal</h3>
                    <div class="text-gray-700 bg-gray-50 p-4 rounded-xl border border-gray-100 min-h-[150px] whitespace-pre-line">
                        {{ $order->subtotal ?? 'Sin subtotal' }}
                    </div>
                </div>

                <div class="mt-8 border-t border-gray-100 pt-6">
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-2">IVA</h3>
                    <div class="text-gray-700 bg-gray-50 p-4 rounded-xl border border-gray-100 min-h-[150px] whitespace-pre-line">
                        {{ $order->iva ?? 'Sin Iva' }}
                    </div>
                </div>

                <div class="mt-8 border-t border-gray-100 pt-6">
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-2">Total General</h3>
                    <div class="text-gray-700 bg-gray-50 p-4 rounded-xl border border-gray-100 min-h-[150px] whitespace-pre-line">
                        {{ $order->total_general ?? 'Sin total general' }}
                    </div>
                </div>

                <div class="mt-8 border-t border-gray-100 pt-6">
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-2">Notas Adicionales</h3>
                    <div class="text-gray-700 bg-gray-50 p-4 rounded-xl border border-gray-100 min-h-[150px] whitespace-pre-line">
                        {{ $order->additional_notes ?? 'Sin notas adicionales' }}
                    </div>
                </div>

                <div class="mt-8 border-t border-gray-100 pt-6">
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-2">Estado del Pedido</h3>
                    <div class="text-gray-700 bg-gray-50 p-4 rounded-xl border border-gray-100 min-h-[150px] whitespace-pre-line">
                        {{ $order->state_order ?? 'Sin estado de orden' }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>