<?php

namespace App\Filament\Admin\Resources\ProteccionDatos\RecursoResource\Pages;

use App\Filament\Admin\Resources\ProteccionDatos\RecursoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateRecurso extends CreateRecord
{
    protected static string $resource = RecursoResource::class;

    protected function getRedirectUrl(): string
    {
        return static::$resource::getUrl('index');
    }
} 