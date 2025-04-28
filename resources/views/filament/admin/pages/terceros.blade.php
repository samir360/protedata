<x-filament-panels::page>
    <div class="flex justify-end mb-4">
        <x-filament::button color="primary" tag="a" href="/admin/terceros/crear">
            {{ __('Añadir tercero') }}
        </x-filament::button>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-semibold mb-4">{{ __('Terceros/Encargados de tratamiento') }}</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Razón Social') }}</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('CIF/NIF') }}</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Certificado cumplimiento') }}</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Contrato firmado') }}</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Acceso a datos') }}</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Fecha de alta') }}</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Acciones') }}</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">Grupo Ático34, S.L</td>
                        <td class="px-6 py-4 whitespace-nowrap">B27816177</td>
                        <td class="px-6 py-4 whitespace-nowrap">17/10/2023</td>
                        <td class="px-6 py-4 whitespace-nowrap">17/10/2023</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">✔</td>
                        <td class="px-6 py-4 whitespace-nowrap">17/10/2023</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <x-heroicon-o-arrow-top-right-on-square class="w-5 h-5 text-primary-500 cursor-pointer" />
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">EMPRESA TERCERA</td>
                        <td class="px-6 py-4 whitespace-nowrap">B02975340</td>
                        <td class="px-6 py-4 whitespace-nowrap"></td>
                        <td class="px-6 py-4 whitespace-nowrap">21/01/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center"></td>
                        <td class="px-6 py-4 whitespace-nowrap">29/01/2025</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <x-heroicon-o-arrow-top-right-on-square class="w-5 h-5 text-primary-500 cursor-pointer" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-filament-panels::page> 