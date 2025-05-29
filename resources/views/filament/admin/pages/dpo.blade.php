<x-filament-panels::page>
    <div class="max-w-6xl mx-auto py-8">
        <h1 class="text-3xl font-bold mb-2 text-center">Delegado de Protección de Datos</h1>
        <p class="text-gray-500 mb-6 text-center">Conozca toda la información sobre nuestro servicio de DPO</p>
        <div class="mb-8 flex justify-center">
            <livewire:dpo-solicitud-info />
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
            <div>
                <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden shadow mb-4">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/VIDEO_ID" title="¿Qué empresas necesitan un Delegado de Protección de Datos?" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="bg-white dark:bg-gray-900 rounded-lg shadow p-6 mb-4">
                    <h2 class="text-lg font-bold mb-2">¿QUÉ ES UN DELEGADO DE PROTECCIÓN DE DATOS O DPO?</h2>
                    <p class="text-gray-600">Un Delegado de Protección de Datos o DPO es una figura que debe comprobar y registrar el tratamiento que se realiza de los datos personales dentro de la organización que obligatoriamente requiera de este profesional.</p>
                </div>
                <div class="bg-white dark:bg-gray-900 rounded-lg shadow p-6">
                    <h2 class="text-lg font-bold mb-2">¿CUÁLES SON LAS FUNCIONES PRINCIPALES DE UN DPO?</h2>
                    <p class="text-gray-600">El DPO deberá asesorar sobre protección de datos, supervisar el cumplimiento de la norma y servir de contacto entre la empresa, la Agencia Española de Protección de Datos y los empleados o clientes.</p>
                </div>
            </div>
            <div>
                <div class="bg-primary-50 dark:bg-primary-900 rounded-lg shadow p-6 flex flex-col items-center justify-center mb-4">
                    <span class="text-2xl font-bold text-primary-700 mb-2">Servicio de DPO</span>
                    <span class="text-lg text-gray-700 mb-4">desde 380€ trimestrales</span>
                    <livewire:dpo-solicitud-info />
                </div>
                <div class="bg-white dark:bg-gray-900 rounded-lg shadow p-6">
                    <h2 class="text-lg font-bold mb-2">¿NECESITA MI EMPRESA UN DELEGADO DE PROTECCIÓN DE DATOS?</h2>
                    <p class="text-gray-600 mb-4">El Reglamento de Protección de Datos (en su artículo 37) establece los siguientes supuestos en los que se exige la designación del DPO:</p>
                    <ul class="list-disc pl-6 space-y-1 text-gray-700">
                        <li>Colegios profesionales</li>
                        <li>Centros docentes</li>
                        <li>Informes comerciales</li>
                        <li>Entidades de crédito</li>
                        <li>Financiación empresarial</li>
                        <li>Juego electrónico</li>
                        <li>Servicios de inversión</li>
                        <li>Distribuidor de electricidad</li>
                        <li>Comunicaciones electrónicas</li>
                        <li>Publicidad</li>
                        <li>Centros sanitarios</li>
                        <li>Seguridad privada</li>
                        <li>Solvencia patrimonial</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-filament-panels::page> 