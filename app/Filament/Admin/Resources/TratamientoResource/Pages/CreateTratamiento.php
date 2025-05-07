<?php

namespace App\Filament\Admin\Resources\TratamientoResource\Pages;

use App\Filament\Admin\Resources\TratamientoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTratamiento extends CreateRecord
{
    protected static string $resource = TratamientoResource::class;

    protected function getRedirectUrl(): string
    {
        return static::$resource::getUrl('index');
    }
} 