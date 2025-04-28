<?php

namespace App\Livewire\Filament\Admin\Resources\TerceroResource;

use App\Models\Tercero;
use Livewire\Component;
use App\Filament\Admin\Resources\TerceroResource;

class CreateForm extends Component
{
    public $categoria;
    public $razon_social;
    public $cif_nif_pasaporte;
    public $direccion;
    public $cp;
    public $localidad;
    public $provincia;
    public $email;
    public $telefono;
    public $responsable;
    public $dni;
    public $servicio;
    public $duracion_servicio;
    public $accede_datos = false;
    public $tratamientos_relacionados;
    public $subcontratacion_permitida = false;
    public $notificacion_violacion = false;
    public $es_grupo_empresarial = false;
    public $destino_final_datos;

    public function mount($categoria = null)
    {
        $this->servicio = $categoria;
    }

    public function save()
    {
        $this->validate([
            'razon_social' => 'required|string|max:255',
            'cif_nif_pasaporte' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'servicio' => 'required|string|max:255',
            'tratamientos_relacionados' => 'required|string',
        ]);

        Tercero::create([
            'razon_social' => $this->razon_social,
            'cif_nif_pasaporte' => $this->cif_nif_pasaporte,
            'direccion' => $this->direccion,
            'cp' => $this->cp,
            'localidad' => $this->localidad,
            'provincia' => $this->provincia,
            'email' => $this->email,
            'telefono' => $this->telefono,
            'responsable' => $this->responsable,
            'dni' => $this->dni,
            'servicio' => $this->servicio,
            'duracion_servicio' => $this->duracion_servicio,
            'accede_datos' => $this->accede_datos,
            'tratamientos_relacionados' => $this->tratamientos_relacionados,
            'subcontratacion_permitida' => $this->subcontratacion_permitida,
            'notificacion_violacion' => $this->notificacion_violacion,
            'es_grupo_empresarial' => $this->es_grupo_empresarial,
            'destino_final_datos' => $this->destino_final_datos,
        ]);

        return redirect(TerceroResource::getUrl('index'));
    }

    public function render()
    {
        return view('livewire.filament.admin.resources.tercero-resource.create-form');
    }
}
