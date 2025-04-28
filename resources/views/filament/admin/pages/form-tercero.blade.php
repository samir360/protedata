<x-filament-panels::page>
    <div class="flex flex-col items-center min-h-[60vh]">
        <div class="w-full max-w-5xl grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Formulario principal -->
            <div class="md:col-span-2 space-y-6">
                <div class="bg-white rounded-lg shadow p-6 mb-4">
                    <h2 class="text-base font-semibold mb-4">Añadir tercero / encargado de tratamiento</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-medium mb-1">Razón social *</label>
                            <input type="text" class="w-full border rounded px-3 py-2" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">CIF/NIF/Pasaporte *</label>
                            <input type="text" class="w-full border rounded px-3 py-2" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Dirección</label>
                            <input type="text" class="w-full border rounded px-3 py-2" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">CP</label>
                            <input type="text" class="w-full border rounded px-3 py-2" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Localidad</label>
                            <input type="text" class="w-full border rounded px-3 py-2" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Provincia</label>
                            <input type="text" class="w-full border rounded px-3 py-2" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Email *</label>
                            <input type="email" class="w-full border rounded px-3 py-2" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Teléfono</label>
                            <input type="text" class="w-full border rounded px-3 py-2" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Responsable</label>
                            <input type="text" class="w-full border rounded px-3 py-2" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">DNI</label>
                            <input type="text" class="w-full border rounded px-3 py-2" />
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-base font-semibold mb-4">Características del servicio</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium mb-1">Servicio *</label>
                            <input type="text" class="w-full border rounded px-3 py-2" value="Servicios de asesoría contable y fiscal" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Duración del servicio</label>
                            <input type="text" class="w-full border rounded px-3 py-2" value="Vinculada a la duración del contrato principal" />
                        </div>
                        <div class="flex items-center mt-2">
                            <label class="block text-sm font-medium mr-2">Accede a datos</label>
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-primary-600" checked />
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Tratamientos relacionados *</label>
                            <select class="w-full border rounded px-3 py-2">
                                <option>Contabilidad</option>
                            </select>
                        </div>
                        <div class="flex items-center mt-2">
                            <label class="block text-sm font-medium mr-2">Subcontratación permitida</label>
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-primary-600" />
                        </div>
                        <div class="flex items-center mt-2">
                            <label class="block text-sm font-medium mr-2">Notificación violación por encargado</label>
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-primary-600" />
                        </div>
                        <div class="flex items-center mt-2">
                            <label class="block text-sm font-medium mr-2">¿Es de su grupo empresarial?</label>
                            <input type="checkbox" class="form-checkbox h-5 w-5 text-primary-600" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Destino final de los datos</label>
                            <select class="w-full border rounded px-3 py-2">
                                <option>Yacwa S.L.</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-end mt-6">
                        <button class="bg-primary-700 hover:bg-primary-800 text-white font-semibold px-6 py-2 rounded flex items-center" disabled>
                            <x-heroicon-o-document-plus class="w-5 h-5 mr-2" />
                            Guardar
                        </button>
                    </div>
                </div>
            </div>
            <!-- Panel de información -->
            <div class="space-y-6">
                <div class="bg-white rounded-lg shadow p-6">
                    <h4 class="font-semibold mb-2">Información</h4>
                    <p class="text-sm text-gray-700">
                        Los encargados de tratamiento son aquellas terceras entidades a las que contratamos un servicio y que acceden a datos de carácter personal de los cuales somos responsables.<br><br>
                        A continuación deberás rellenar cada uno de los campos con los datos de tu encargado de tratamiento, y después deberás firmar el contrato de encargado de tratamiento con cada uno de ellos.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-filament-panels::page> 