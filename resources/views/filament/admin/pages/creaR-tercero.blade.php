<x-filament-panels::page>
    <div class="flex flex-col items-center justify-center min-h-[60vh]">
        <div class="w-full max-w-3xl bg-white rounded-lg shadow p-8">
            <h2 class="text-center text-lg font-bold mb-2">SELECCIONE LA ACTIVIDAD O SERVICIO QUE REALIZA EL TERCERO</h2>
            <p class="text-center text-sm text-gray-600 mb-8">
                Necesario añadir aquellas entidades que tengan acceso a los datos personales de su organización (clientes, empleados...)
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="flex flex-col items-center p-6 border rounded-lg hover:shadow cursor-pointer transition">
                    <x-heroicon-o-briefcase class="w-12 h-12 mb-2 text-amber-800" />
                    <span class="font-medium text-center">Asesoría fiscal</span>
                </div>
                <div class="flex flex-col items-center p-6 border rounded-lg hover:shadow cursor-pointer transition">
                    <x-heroicon-o-briefcase class="w-12 h-12 mb-2 text-amber-800" />
                    <span class="font-medium text-center">Asesoría laboral</span>
                </div>
                <div class="flex flex-col items-center p-6 border rounded-lg hover:shadow cursor-pointer transition">
                    <x-heroicon-o-device-tablet class="w-12 h-12 mb-2 text-amber-800" />
                    <span class="font-medium text-center">Empresa de mantenimiento informático/web</span>
                </div>
                <div class="flex flex-col items-center p-6 border rounded-lg hover:shadow cursor-pointer transition">
                    <x-heroicon-o-shield-check class="w-12 h-12 mb-2 text-amber-800" />
                    <span class="font-medium text-center">Prevención de riesgos laborales</span>
                </div>
                <div class="flex flex-col items-center p-6 border rounded-lg hover:shadow cursor-pointer transition">
                    <x-heroicon-o-camera class="w-12 h-12 mb-2 text-amber-800" />
                    <span class="font-medium text-center">Gestión/control videovigilancia</span>
                </div>
                <div class="flex flex-col items-center p-6 border rounded-lg hover:shadow cursor-pointer transition">
                    <x-heroicon-o-document class="w-12 h-12 mb-2 text-amber-800" />
                    <span class="font-medium text-center">Otros <span class="text-xs">(IMPORTANTE: ver excluidos debajo)</span></span>
                </div>
            </div>
            <div class="text-xs text-gray-700 mt-4">
                <b>EXCLUIDOS:</b> entidades bancarias, mutuas colaboradoras de la seguridad social, Administraciones Públicas, o colaboradores que actúen como cesionarios o responsables del tratamiento
            </div>
        </div>
    </div>
</x-filament-panels::page> 