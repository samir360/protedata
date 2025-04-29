<?php

namespace App\Filament\Admin\Resources\EmpleadoResource\Pages;

use App\Filament\Admin\Resources\EmpleadoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEmpleado extends CreateRecord
{
    protected static string $resource = EmpleadoResource::class;

    protected function getRedirectUrl(): string
    {
        return static::$resource::getUrl('index');
    }
} 