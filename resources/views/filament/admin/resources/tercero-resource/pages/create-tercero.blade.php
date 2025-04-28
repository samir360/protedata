<x-filament::page>
    @php
        $categorias = [
            'Asesoría fiscal',
            'Asesoría laboral',
            'Empresa de mantenimiento informático/web',
            'Prevención de riesgos laborales',
            'Gestión/control videovigilancia',
            'Otros',
        ];
        $selected = request('categoria');
    @endphp

    @if(!$selected)
        <div class="flex flex-col items-center justify-center min-h-[60vh]">
            <div class="w-full max-w-3xl bg-white rounded-lg shadow p-8">
                <h2 class="text-center text-lg font-bold mb-2">SELECCIONE LA ACTIVIDAD O SERVICIO QUE REALIZA EL TERCERO</h2>
                <p class="text-center text-sm text-gray-600 mb-8">
                    Necesario añadir aquellas entidades que tengan acceso a los datos personales de su organización (clientes, empleados...)
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    @foreach($categorias as $cat)
                        <a href="?categoria={{ urlencode($cat) }}" class="flex flex-col items-center p-6 border rounded-lg hover:shadow cursor-pointer transition">
                            <x-heroicon-o-briefcase class="w-12 h-12 mb-2 text-amber-800" />
                            <span class="font-medium text-center">{{ $cat }}</span>
                        </a>
                    @endforeach
                </div>
                <div class="text-xs text-gray-700 mt-4">
                    <b>EXCLUIDOS:</b> entidades bancarias, mutuas colaboradoras de la seguridad social, Administraciones Públicas, o colaboradores que actúen como cesionarios o responsables del tratamiento
                </div>
            </div>
        </div>
    @else
        <livewire:filament.admin.resources.tercero-resource.create-form :categoria="$selected" />
    @endif
</x-filament::page> 