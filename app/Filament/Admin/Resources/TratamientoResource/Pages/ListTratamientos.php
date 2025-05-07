<?php

namespace App\Filament\Admin\Resources\TratamientoResource\Pages;

use App\Filament\Admin\Resources\TratamientoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTratamientos extends ListRecords
{
    protected static string $resource = TratamientoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
} 