<?php

namespace App\Filament\Admin\Pages;

use Filament\Pages\Page;

class Dpo extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-shield-check';
    protected static string $view = 'filament.admin.pages.dpo';
    protected static ?string $navigationGroup = 'Protección de Datos';
    protected static ?string $navigationLabel = 'DPO';
    protected static ?int $navigationSort = 6;
    protected static ?string $slug = 'dpo';

    public static function getNavigationLabel(): string
    {
        return __('DPO');
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Protección de Datos';
    }

    public function getTitle(): string
    {
        return __('Delegado de Protección de Datos');
    }
} 