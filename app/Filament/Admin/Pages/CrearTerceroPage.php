<?php

namespace App\Filament\Admin\Pages;

use Filament\Pages\Page;

class CrearTerceroPage extends Page
{
    protected static ?string $navigationIcon = null;

    protected static string $view = 'filament.admin.pages.crear-tercero';

    protected static ?string $navigationGroup = null;

    protected static ?string $navigationLabel = null;

    protected static ?string $slug = 'terceros/crear';

    public function getTitle(): string
    {
        return __('Añadir Tercero');
    }
} 