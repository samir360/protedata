<x-filament-panels::page>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        {{-- Columna Izquierda --}}
        <div class="col-span-1 space-y-6">
            {{-- Lo más descargado --}}
            <x-filament::section>
                <x-slot name="heading">
                    {{ __('Lo más descargado') }}
                </x-slot>
                <div class="text-center py-8">
                    <p class="text-5xl font-bold text-primary-600 dark:text-primary-400">+40</p>
                    <p class="text-lg text-gray-500 dark:text-gray-400">{{ __('contratos, cláusulas...') }}</p>
                    <div class="mt-6">
                        <x-filament::button tag="a" href="#" outlined="true">
                            {{ __('Centro de Documentación') }}
                        </x-filament::button>
                    </div>
                </div>
            </x-filament::section>

            {{-- Lista de Documentos --}}
             <x-filament::section :compact="true">
                 <ul class="divide-y divide-gray-200 dark:divide-white/10">
                    <li class="py-3 px-4 flex justify-between items-center">
                        <div class="flex items-center space-x-3 rtl:space-x-reverse">
                            <x-heroicon-o-document-text class="w-5 h-5 text-gray-400"/>
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-200">{{ __('Publicación de imágenes en rrss, web...') }}</span>
                        </div>
                        <x-filament::badge color="gray">{{ __('Clientes') }}</x-filament::badge>
                    </li>
                     <li class="py-3 px-4 flex justify-between items-center">
                        <div class="flex items-center space-x-3 rtl:space-x-reverse">
                             <x-heroicon-o-document-text class="w-5 h-5 text-gray-400"/>
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-200">{{ __('Datos biométricos empleados') }}</span>
                             <x-filament::badge color="info" class="ml-2">{{ __('NUEVO') }}</x-filament::badge>
                        </div>
                        <x-filament::badge color="gray">{{ __('RRHH') }}</x-filament::badge>
                    </li>
                     <li class="py-3 px-4 flex justify-between items-center">
                        <div class="flex items-center space-x-3 rtl:space-x-reverse">
                             <x-heroicon-o-document-text class="w-5 h-5 text-gray-400"/>
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-200">{{ __('Teletrabajo') }}</span>
                        </div>
                        <x-filament::badge color="gray">{{ __('RRHH') }}</x-filament::badge>
                    </li>
                     <li class="py-3 px-4 flex justify-between items-center">
                        <div class="flex items-center space-x-3 rtl:space-x-reverse">
                            <x-heroicon-o-document-text class="w-5 h-5 text-gray-400"/>
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-200">{{ __('Procedimiento de salida del empleado') }}</span>
                        </div>
                        <x-filament::badge color="gray">{{ __('RRHH') }}</x-filament::badge>
                    </li>
                     <li class="py-3 px-4 flex justify-between items-center">
                        <div class="flex items-center space-x-3 rtl:space-x-reverse">
                            <x-heroicon-o-document-text class="w-5 h-5 text-gray-400"/>
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-200">{{ __('Videoconferencias / Skype') }}</span>
                        </div>
                        <x-filament::badge color="gray">{{ __('Clientes') }}</x-filament::badge>
                    </li>
                 </ul>
             </x-filament::section>

            {{-- Documentos / Informes --}}
            <x-filament::section>
                <x-slot name="heading">
                    {{ __('Documentos / Informes') }}
                </x-slot>
                <ul class="space-y-2">
                    <li class="flex items-center space-x-2 rtl:space-x-reverse text-sm text-gray-600 dark:text-gray-300">
                         <x-heroicon-o-document-chart-bar class="w-5 h-5 text-gray-400"/>
                        <span>{{ __('Análisis de riesgos') }}</span>
                    </li>
                    {{-- Add more items if needed --}}
                </ul>
            </x-filament::section>
        </div>

        {{-- Columna Central --}}
        <div class="col-span-1 space-y-6">
            {{-- Confidencialidad --}}
            <x-filament::section>
                 <x-slot name="heading">
                    {{ __('Confidencialidad') }}
                </x-slot>
                <div class="grid grid-cols-2 divide-x dark:divide-gray-700 text-center">
                    <div class="p-4">
                        <x-heroicon-o-users class="w-8 h-8 mx-auto text-gray-400 mb-2"/>
                        <p class="text-sm text-gray-500 dark:text-gray-400">{{ __('Terceros') }}</p>
                        <p class="text-lg font-semibold">(1)</p>
                    </div>
                     <div class="p-4">
                        <x-heroicon-o-briefcase class="w-8 h-8 mx-auto text-gray-400 mb-2"/>
                        <p class="text-sm text-gray-500 dark:text-gray-400">{{ __('Empleados') }}</p>
                         <p class="text-lg font-semibold">(2)</p>
                    </div>
                </div>
            </x-filament::section>

            {{-- Contratos de cesión de datos --}}
            <x-filament::section>
                <x-slot name="heading">
                    {{ __('Contratos de cesión de datos') }}
                </x-slot>
                <div class="flex items-center justify-center py-8 space-x-8 rtl:space-x-reverse">
                    {{-- Placeholder for Chart --}}
                    <div class="relative w-32 h-32">
                        <svg class="w-full h-full" viewBox="0 0 36 36">
                            <path class="text-gray-200 dark:text-gray-700" stroke-linecap="round" fill="none" stroke-width="3" stroke="currentColor" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                            <path class="text-success-600 dark:text-success-400" stroke-linecap="round" fill="none" stroke-width="3" stroke-dasharray="90, 100" stroke="currentColor" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                        </svg>
                        <div class="absolute inset-0 flex items-center justify-center text-3xl font-bold">1</div>
                    </div>
                    <div class="text-sm space-y-2">
                        <div class="flex items-center space-x-2 rtl:space-x-reverse">
                            <span class="block w-3 h-3 bg-success-600 dark:bg-success-400 rounded-full"></span>
                            <span>1 {{ __('Firmados') }}</span>
                        </div>
                        <div class="flex items-center space-x-2 rtl:space-x-reverse">
                            <span class="block w-3 h-3 bg-danger-600 dark:bg-danger-400 rounded-full"></span>
                             <span>0 {{ __('No firmados') }}</span>
                        </div>
                    </div>
                </div>
            </x-filament::section>

             {{-- Noticias --}}
            <x-filament::section>
                <x-slot name="heading">
                     {{-- Tabs Placeholder --}}
                     <div class="border-b border-gray-200 dark:border-gray-700">
                        <nav class="-mb-px flex space-x-8 rtl:space-x-reverse" aria-label="Tabs">
                            <a href="#" class="border-primary-500 text-primary-600 whitespace-nowrap py-3 px-1 border-b-2 font-medium text-sm" aria-current="page">{{ __('Noticias') }}</a>
                            <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-200 dark:hover:border-gray-600 whitespace-nowrap py-3 px-1 border-b-2 font-medium text-sm">{{ __('Resoluciones AEPD') }}</a>
                            <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-200 dark:hover:border-gray-600 whitespace-nowrap py-3 px-1 border-b-2 font-medium text-sm">{{ __('Actualizaciones') }}</a>
                        </nav
                    </div>
                </x-slot>
                <ul class="space-y-4 py-4">
                    <li class="flex space-x-3 rtl:space-x-reverse">
                        <x-heroicon-o-question-mark-circle class="w-5 h-5 text-gray-400 mt-0.5"/>
                        <div class="text-sm">
                            <p class="font-medium text-gray-900 dark:text-white">{{ __('Multada con 11.000 euros una empresa de grúas por haber hecho el trabajador una foto del DNI del cliente con su móvil personal.') }}</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">12/04/2025</p>
                            <p class="text-gray-600 dark:text-gray-300 mt-1">{{ __('Además de no informar al usuario del tratamiento que se iba a hacer de sus datos personales, la empresa carecía de carteles avisando que era una zona vigilada.') }}</p>
                        </div>
                    </li>
                     <li class="flex space-x-3 rtl:space-x-reverse">
                         <x-heroicon-o-question-mark-circle class="w-5 h-5 text-gray-400 mt-0.5"/>
                        <div class="text-sm">
                            <p class="font-medium text-gray-900 dark:text-white">{{ __('Multa de 6.000 euros a una empresa por facilitar a terceros el teléfono personal de una empleada sin su consentimiento') }}</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">02/03/2025</p>
                            <p class="text-gray-600 dark:text-gray-300 mt-1">{{ __('La empresa había facilitado sus datos personales, teléfono móvil incluido a 18 personas.') }}</p>
                        </div>
                    </li>
                    <li class="flex space-x-3 rtl:space-x-reverse">
                         <x-heroicon-o-question-mark-circle class="w-5 h-5 text-gray-400 mt-0.5"/>
                        <div class="text-sm">
                            <p class="font-medium text-gray-900 dark:text-white">{{ __('Sancionado un hotel con 1.500 euros por pretender fotocopiar el DNI de un cliente.') }}</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">06/02/2025</p>
                            <p class="text-gray-600 dark:text-gray-300 mt-1">{{ __('Es un tratamiento de datos personales excesivo, contrario al principio de minimización de datos del artículo 5.1.c) del RGPD') }}</p>
                        </div>
                    </li>
                </ul>
            </x-filament::section>
        </div>

         {{-- Columna Derecha --}}
         <div class="col-span-1">
             {{-- Revisión de seguridad --}}
            <div class="bg-warning-100 dark:bg-warning-800/50 p-6 rounded-lg text-center shadow">
                 <x-heroicon-o-lock-closed class="w-8 h-8 mx-auto text-warning-600 dark:text-warning-400 mb-3"/>
                <p class="text-sm font-semibold uppercase tracking-wider text-warning-700 dark:text-warning-300">{{ __('Revisión de seguridad') }}</p>
                <p class="mt-2 text-2xl font-bold text-warning-900 dark:text-warning-100">{{ __('Se han detectado :count problemas', ['count' => 1]) }}</p>
                <div class="mt-4">
                     <x-filament::button color="warning" tag="a" href="#">
                        {{ __('Solucionar') }}
                    </x-filament::button>
                </div>
                 <p class="mt-4 text-sm text-warning-700 dark:text-warning-300">{{ __('Necesitamos que revise estas incidencias para ayudarle a cumplir la Ley de Protección de Datos.') }}</p>
            </div>
        </div>

    </div>
</x-filament-panels::page> 