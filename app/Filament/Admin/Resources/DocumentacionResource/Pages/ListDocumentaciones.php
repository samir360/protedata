<?php

namespace App\Filament\Admin\Resources\DocumentacionResource\Pages;

use App\Filament\Admin\Resources\DocumentacionResource;
use Filament\Resources\Pages\ListRecords;

class ListDocumentaciones extends ListRecords
{
    protected static string $resource = DocumentacionResource::class;
    protected static string $view = 'filament.admin.resources.documentacion-resource.pages.list-documentaciones';
} 