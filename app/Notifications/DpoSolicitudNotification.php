<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\User;

class DpoSolicitudNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $solicitante;

    public function __construct(User $solicitante)
    {
        $this->solicitante = $solicitante;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Nueva solicitud de información DPO')
            ->greeting('Hola administrador,')
            ->line('Un usuario ha solicitado información sobre el servicio de DPO.')
            ->line('Solicitante: ' . $this->solicitante->name . ' (' . $this->solicitante->email . ')')
            ->line('Por favor, contacte con el usuario para más detalles.');
    }
} 