<x-filament-panels::page>
    <div class="flex flex-col items-center min-h-[60vh]">
        <div class="w-full max-w-5xl grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Formulario principal -->
            <div class="md:col-span-2 space-y-6">
                <form method="POST" action="{{ route('terceros.store') }}" class="space-y-6">
                    @csrf
                    @if ($errors->any())
                        <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
                            <ul class="text-sm pl-4 list-disc">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="bg-white rounded-lg shadow p-6 mb-4">
                        <h2 class="text-base font-semibold mb-4">Añadir tercero / encargado de tratamiento</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label class="block text-sm font-medium mb-1">Razón social *</label>
                                <input type="text" name="razon_social" class="w-full border rounded px-3 py-2" required />
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">CIF/NIF/Pasaporte *</label>
                                <input type="text" name="cif_nif_pasaporte" class="w-full border rounded px-3 py-2" required />
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Dirección</label>
                                <input type="text" name="direccion" class="w-full border rounded px-3 py-2" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">CP</label>
                                <input type="text" name="cp" class="w-full border rounded px-3 py-2" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Localidad</label>
                                <input type="text" name="localidad" class="w-full border rounded px-3 py-2" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Provincia</label>
                                <input type="text" name="provincia" class="w-full border rounded px-3 py-2" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Email *</label>
                                <input type="email" name="email" class="w-full border rounded px-3 py-2" required />
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Teléfono</label>
                                <input type="text" name="telefono" class="w-full border rounded px-3 py-2" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Responsable</label>
                                <input type="text" name="responsable" class="w-full border rounded px-3 py-2" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">DNI</label>
                                <input type="text" name="dni" class="w-full border rounded px-3 py-2" />
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-base font-semibold mb-4">Características del servicio</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium mb-1">Servicio *</label>
                                <input type="text" name="servicio" class="w-full border rounded px-3 py-2" value="Servicios de asesoría contable y fiscal" required />
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Duración del servicio</label>
                                <input type="text" name="duracion_servicio" class="w-full border rounded px-3 py-2" value="Vinculada a la duración del contrato principal" />
                            </div>
                            <div class="flex items-center mt-2">
                                <label class="block text-sm font-medium mr-2">Accede a datos</label>
                                <input type="checkbox" name="accede_datos" class="form-checkbox h-5 w-5 text-primary-600" value="1" checked />
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Tratamientos relacionados *</label>
                                <select name="tratamientos_relacionados" class="w-full border rounded px-3 py-2">
                                    <option value="Contabilidad">Contabilidad</option>
                                </select>
                            </div>
                            <div class="flex items-center mt-2">
                                <label class="block text-sm font-medium mr-2">Subcontratación permitida</label>
                                <input type="checkbox" name="subcontratacion_permitida" class="form-checkbox h-5 w-5 text-primary-600" value="1" />
                            </div>
                            <div class="flex items-center mt-2">
                                <label class="block text-sm font-medium mr-2">Notificación violación por encargado</label>
                                <input type="checkbox" name="notificacion_violacion" class="form-checkbox h-5 w-5 text-primary-600" value="1" />
                            </div>
                            <div class="flex items-center mt-2">
                                <label class="block text-sm font-medium mr-2">¿Es de su grupo empresarial?</label>
                                <input type="checkbox" name="es_grupo_empresarial" class="form-checkbox h-5 w-5 text-primary-600" value="1" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Destino final de los datos</label>
                                <select name="destino_final_datos" class="w-full border rounded px-3 py-2">
                                    <option value="Yacwa S.L.">Yacwa S.L.</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex justify-end mt-6">
                            <button type="submit" class="bg-primary-700 hover:bg-primary-800 text-white font-semibold px-6 py-2 rounded flex items-center">
                                <x-heroicon-o-document-plus class="w-5 h-5 mr-2" />
                                Guardar
                            </button>
                        </div>
                    </div>
                </form>
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