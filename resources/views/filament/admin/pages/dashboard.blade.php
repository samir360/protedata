<x-filament-panels::page class="filament-dashboard-page">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <!-- Protección de datos -->
        <div class="bg-white dark:bg-gray-900 rounded-lg shadow p-8 flex flex-col items-center text-center">
            <x-heroicon-o-shield-check class="w-12 h-12 text-primary-600 mb-4" />
            <h2 class="text-xl font-bold mb-2">Protección de datos</h2>
            <p class="text-gray-500 mb-6">Gestione el cumplimiento del RGPD y LOPDGDD</p>
            <x-filament::button tag="a" href="/admin/data-protection" color="primary">
                Acceder
            </x-filament::button>
        </div>
        <!-- Control horario -->
        <div class="bg-white dark:bg-gray-900 rounded-lg shadow p-8 flex flex-col items-center text-center">
            <x-heroicon-o-clipboard-document-list class="w-12 h-12 text-primary-600 mb-4" />
            <h2 class="text-xl font-bold mb-2">Control horario</h2>
            <p class="text-gray-500 mb-6">Nos encargamos de facilitarle el cumplimiento de esta nueva obligación.</p>
            <x-filament::button tag="button" color="secondary" disabled>
                + información
            </x-filament::button>
        </div>
        <!-- Colabora con nosotros -->
        <div class="bg-white dark:bg-gray-900 rounded-lg shadow p-8 flex flex-col items-center text-center">
            <x-heroicon-o-user-group class="w-12 h-12 text-primary-600 mb-4" />
            <h2 class="text-xl font-bold mb-2">Colabora con nosotros</h2>
            <p class="text-gray-500 mb-6">Los partners se benefician de atractivos márgenes comerciales.</p>
            <x-filament::button tag="button" color="secondary" disabled>
                + información
            </x-filament::button>
        </div>
    </div>
</x-filament-panels::page> 