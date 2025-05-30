<x-filament::page>
    <div class="flex flex-col md:flex-row gap-8">
        <!-- Columna principal -->
        <div class="md:w-2/3 space-y-6">
            <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $record->categoria }} &gt; {{ $record->titulo }}</h2>
            <div class="space-y-4">
                @foreach($record->preguntas_respuestas as $item)
                    <div>
                        <h3 class="font-semibold">{{ $item['pregunta'] }}</h3>
                        <p>{{ $item['respuesta'] }}</p>
                    </div>
                @endforeach
            </div>
            <!-- Blog Posts -->
            <div class="mt-8">
                <h4 class="font-bold mb-2">Blog Posts</h4>
                <ul class="list-disc list-inside text-gray-700 space-y-1">
                    <li>Desconexión digital: Qué es, Derecho, Leyes y beneficios <span class="text-xs text-gray-400">2025-03-03 13:45:44</span></li>
                    <li>Protocolo de Desconexión Digital: Guía Completa y Modelo Obligatorio para Empresas y Precios <span class="text-xs text-gray-400">2025-02-10 09:00:52</span></li>
                    <li>Me contratan en el trabajo a cada momento ¿Esto es legal? <span class="text-xs text-gray-400">2024-10-19 17:00:04</span></li>
                    <li>¿Qué es el consentimiento expreso de empleados o candidatos? Las personas afectadas por este derecho <span class="text-xs text-gray-400">2024-09-26 10:00:08</span></li>
                </ul>
            </div>
        </div>
        <!-- Columna lateral MODELO -->
        <div class="md:w-1/3">
            <div class="bg-white rounded-lg shadow p-4">
                <h4 class="font-bold mb-4">MODELO</h4>
                <button id="abrir-modal" class="w-full flex items-center gap-2 px-4 py-2 bg-danger-600 text-white rounded hover:bg-danger-700 transition mb-2">
                    <x-heroicon-o-document-text class="w-5 h-5" /> {{ $record->titulo }}
                </button>
                <p class="mt-4 text-xs text-gray-500">Si tienes cualquier duda sobre este documento <a href="#" class="text-primary-600 underline">contacta con tu abogado</a>.</p>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal-modelo" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg shadow-lg max-w-2xl w-full p-6 relative">
            <button id="cerrar-modal" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
                <x-heroicon-o-x-mark class="w-6 h-6" />
            </button>
            <h3 class="text-lg font-bold mb-4">{{ $record->titulo }}</h3>
            <div id="contenido-modelo" class="prose max-h-96 overflow-y-auto border p-4 mb-4 bg-gray-50">
                {!! nl2br(e($record->contenido_modelo)) !!}
            </div>
            <div class="flex gap-2">
                <button id="copiar-texto" class="px-4 py-2 bg-primary-600 text-white rounded hover:bg-primary-700">Copiar</button>
                <button id="imprimir-texto" class="px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700">Imprimir / Guardar PDF</button>
                <button id="descargar-word" class="px-4 py-2 bg-success-600 text-white rounded hover:bg-success-700">Descargar Word</button>
            </div>
        </div>
    </div>

    <script>
        function activarModalDocumentacion() {
            document.getElementById('abrir-modal').onclick = function() {
                document.getElementById('modal-modelo').classList.remove('hidden');
            };
            document.getElementById('cerrar-modal').onclick = function() {
                document.getElementById('modal-modelo').classList.add('hidden');
            };
            document.getElementById('copiar-texto').onclick = function() {
                const contenido = document.getElementById('contenido-modelo').innerText;
                navigator.clipboard.writeText(contenido);
                alert('Texto copiado al portapapeles');
            };
            document.getElementById('imprimir-texto').onclick = function() {
                const contenido = document.getElementById('contenido-modelo').innerHTML;
                const ventana = window.open('', '', 'height=800,width=600');
                ventana.document.write('<html><head><title>Imprimir</title></head><body>' + contenido + '</body></html>');
                ventana.document.close();
                ventana.print();
            };
            document.getElementById('descargar-word').onclick = function() {
                const contenido = document.getElementById('contenido-modelo').innerText;
                const blob = new Blob([contenido], { type: 'application/msword' });
                const url = URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = '{{ str_replace(' ', '_', $record->titulo) }}.doc';
                a.click();
                URL.revokeObjectURL(url);
            };
        }

        window.addEventListener('filament:ready', activarModalDocumentacion);
        document.addEventListener('DOMContentLoaded', activarModalDocumentacion);
    </script>
</x-filament::page> 