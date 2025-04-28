<?php

namespace App\Filament\Admin\Pages;

use Filament\Pages\Page;

class TercerosPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static string $view = 'filament.admin.pages.terceros';

    protected static ?string $navigationGroup = 'Protección de Datos';

    protected static ?string $navigationLabel = 'Terceros';

    protected static ?int $navigationSort = 2;

    protected static ?string $slug = 'terceros';

    public static function getNavigationLabel(): string
    {
        return __('Terceros');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('Protección de Datos');
    }

    public function getTitle(): string
    {
        return __('Terceros');
    }
} 