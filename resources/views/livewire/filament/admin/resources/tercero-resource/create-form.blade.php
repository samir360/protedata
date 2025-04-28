<div>
    <form wire:submit.prevent="save" class="space-y-6">
        <div class="bg-white rounded-lg shadow p-6 mb-4">
            <h2 class="text-base font-semibold mb-4">Añadir tercero / encargado de tratamiento</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Razón social *</label>
                    <input type="text" wire:model.defer="razon_social" class="w-full border rounded px-3 py-2" required />
                    @error('razon_social') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">CIF/NIF/Pasaporte *</label>
                    <input type="text" wire:model.defer="cif_nif_pasaporte" class="w-full border rounded px-3 py-2" required />
                    @error('cif_nif_pasaporte') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Dirección</label>
                    <input type="text" wire:model.defer="direccion" class="w-full border rounded px-3 py-2" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">CP</label>
                    <input type="text" wire:model.defer="cp" class="w-full border rounded px-3 py-2" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Localidad</label>
                    <input type="text" wire:model.defer="localidad" class="w-full border rounded px-3 py-2" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Provincia</label>
                    <input type="text" wire:model.defer="provincia" class="w-full border rounded px-3 py-2" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Email *</label>
                    <input type="email" wire:model.defer="email" class="w-full border rounded px-3 py-2" required />
                    @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Teléfono</label>
                    <input type="text" wire:model.defer="telefono" class="w-full border rounded px-3 py-2" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Responsable</label>
                    <input type="text" wire:model.defer="responsable" class="w-full border rounded px-3 py-2" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">DNI</label>
                    <input type="text" wire:model.defer="dni" class="w-full border rounded px-3 py-2" />
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-base font-semibold mb-4">Características del servicio</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Servicio *</label>
                    <input type="text" wire:model.defer="servicio" class="w-full border rounded px-3 py-2" required />
                    @error('servicio') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Duración del servicio</label>
                    <input type="text" wire:model.defer="duracion_servicio" class="w-full border rounded px-3 py-2" />
                </div>
                <div class="flex items-center mt-2">
                    <label class="block text-sm font-medium mr-2">Accede a datos</label>
                    <input type="checkbox" wire:model.defer="accede_datos" class="form-checkbox h-5 w-5 text-primary-600" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Tratamientos relacionados *</label>
                    <select wire:model.defer="tratamientos_relacionados" class="w-full border rounded px-3 py-2" required>
                        <option value="">Ninguno seleccionado</option>
                        <option value="Otro">Otro</option>
                        <option value="Riesgos">Riesgos</option>
                        <option value="CV">CV</option>
                        <option value="Proveedores">Proveedores</option>
                        <option value="RRHH">RRHH</option>
                        <option value="Clientes">Clientes</option>
                        <option value="Contabilidad">Contabilidad</option>
                    </select>
                    @error('tratamientos_relacionados') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
                <div class="flex items-center mt-2">
                    <label class="block text-sm font-medium mr-2">Subcontratación permitida</label>
                    <input type="checkbox" wire:model.defer="subcontratacion_permitida" class="form-checkbox h-5 w-5 text-primary-600" />
                </div>
                <div class="flex items-center mt-2">
                    <label class="block text-sm font-medium mr-2">Notificación violación por encargado</label>
                    <input type="checkbox" wire:model.defer="notificacion_violacion" class="form-checkbox h-5 w-5 text-primary-600" />
                </div>
                <div class="flex items-center mt-2">
                    <label class="block text-sm font-medium mr-2">¿Es de su grupo empresarial?</label>
                    <input type="checkbox" wire:model.defer="es_grupo_empresarial" class="form-checkbox h-5 w-5 text-primary-600" />
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Destino final de los datos</label>
                    <input type="text" wire:model.defer="destino_final_datos" class="w-full border rounded px-3 py-2" />
                </div>
            </div>
            <div class="flex justify-end mt-6">
                <button type="submit" class="bg-primary-700 hover:bg-primary-800 text-white font-semibold px-6 py-2 rounded flex items-center">
                    Guardar
                </button>
            </div>
        </div>
    </form>
</div>
