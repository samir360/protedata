<div>
    @if($sent)
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="fixed top-4 right-4 z-50 bg-green-500 text-white px-4 py-2 rounded shadow">
            ¡Su solicitud fue enviada!
        </div>
    @endif
    <button wire:click="solicitarInfo" class="bg-primary-600 hover:bg-primary-700 text-white font-bold py-2 px-4 rounded shadow transition">
        Solicitar información
    </button>
</div> 