<x-filament-panels::page>
    <div class="flex justify-end mb-4">
        <x-filament::button color="primary" tag="a" href="{{ route('terceros.create') }}">
            {{ __('Añadir tercero') }}
        </x-filament::button>
    </div>
    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-semibold mb-4">{{ __('Terceros/Encargados de tratamiento') }}</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Razón Social') }}</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('CIF/NIF') }}</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Email') }}</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Servicio') }}</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Accede a datos') }}</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Fecha de alta') }}</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($terceros as $tercero)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $tercero->razon_social }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $tercero->cif_nif_pasaporte }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $tercero->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $tercero->servicio }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">{{ $tercero->accede_datos ? '✔' : '' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $tercero->created_at->format('d/m/Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center text-gray-500">No hay terceros registrados.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-filament-panels::page> 