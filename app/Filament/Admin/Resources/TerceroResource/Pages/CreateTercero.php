<?php

namespace App\Filament\Admin\Resources\TerceroResource\Pages;

use App\Filament\Admin\Resources\TerceroResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTercero extends CreateRecord
{
    protected static string $resource = TerceroResource::class;
    protected static string $view = 'filament.admin.resources.tercero-resource.pages.create-tercero';
}
