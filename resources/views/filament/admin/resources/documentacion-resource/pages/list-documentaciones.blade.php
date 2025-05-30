@php
    $records = \App\Models\Documentacion::all();
@endphp

<div class="space-y-8">
    <!-- Sección superior -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Documento de Seguridad -->
        <div class="flex flex-col items-center justify-center bg-white rounded-lg shadow p-6">
            <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="Documento de Seguridad" class="w-32 mb-4">
            <div class="text-center">
                <h2 class="font-bold text-lg mb-2">Documento de Seguridad</h2>
                <p class="text-gray-600 mb-2">
                    Este es el principal documento. Contiene las medidas de índole técnica y organizativa necesarias para garantizar la protección, confidencialidad e integridad de los recursos afectados por lo dispuesto en la LOPD-GDD.
                </p>
                <a href="#" class="inline-flex items-center px-4 py-2 bg-danger-600 text-white rounded hover:bg-danger-700 transition">
                    <x-heroicon-o-document-text class="w-5 h-5 mr-2" /> Descargar PDF
                </a>
            </div>
        </div>
        <!-- Modelos más descargados -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="font-semibold mb-4">Modelos más descargados</h3>
            <ul class="space-y-2">
                @foreach($records->take(6) as $doc)
                    <li>
                        <a href="{{ route('filament.admin.resources.documentacions.view', $doc->id) }}" class="text-primary-600 hover:underline flex items-center">
                            <x-heroicon-o-document-text class="w-4 h-4 mr-2" /> {{ $doc->titulo }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Grid de categorías -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @php
            $agrupados = $records->groupBy('categoria');
        @endphp
        @foreach($agrupados as $categoria => $docs)
            <div class="bg-white rounded-lg shadow p-4">
                <h4 class="font-bold mb-2">{{ $categoria }}</h4>
                <ul class="list-disc list-inside space-y-1">
                    @foreach($docs as $doc)
                        <li>
                            <a href="{{ route('filament.admin.resources.documentacions.view', $doc->id) }}" class="text-primary-600 hover:underline">
                                {{ $doc->titulo }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
        <!-- Columna de contacto -->
        <div class="bg-white rounded-lg shadow p-4 flex flex-col justify-between">
            <div>
                <h4 class="font-bold mb-2">¿Necesita algún documento?</h4>
                <p class="mb-2">No se preocupe, póngase en contacto con nosotros y uno de nuestros asesores le ayuda en lo que necesite.</p>
            </div>
            <a href="#" class="mt-4 inline-flex items-center px-4 py-2 bg-primary-600 text-white rounded hover:bg-primary-700 transition">
                Contactar
            </a>
        </div>
    </div>
</div> 