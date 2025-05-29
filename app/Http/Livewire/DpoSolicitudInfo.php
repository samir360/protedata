<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;
use App\Notifications\DpoSolicitudNotification;

class DpoSolicitudInfo extends Component
{
    public $sent = false;

    public function solicitarInfo()
    {
        $this->sent = true;
        // Notificar a los administradores
        $admins = User::where('is_admin', true)->get();
        Notification::send($admins, new DpoSolicitudNotification(Auth::user()));
        // Opcional: también puedes enviar un email
        // foreach ($admins as $admin) {
        //     Mail::to($admin->email)->send(new \App\Mail\DpoSolicitudMail(Auth::user()));
        // }
        $this->dispatchBrowserEvent('dpo-solicitud-enviada');
    }

    public function render()
    {
        return view('livewire.dpo-solicitud-info');
    }
} 