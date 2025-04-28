<?php

namespace App\Filament\Admin\Pages;

use Filament\Pages\Page;

class DataProtectionDashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-shield-check';

    protected static string $view = 'filament.admin.pages.data-protection-dashboard';

    protected static ?string $navigationGroup = 'Protección de Datos'; // Group name

    protected static ?string $navigationLabel = 'Dashboard'; // Label in the navigation

    protected static ?int $navigationSort = 1; // Optional: order within the group

    protected static ?string $slug = 'data-protection'; // URL slug: /admin/data-protection

    public static function getNavigationLabel(): string
    {
        return __('Dashboard');
    }

     public static function getNavigationGroup(): ?string
    {
        return 'Protección de Datos';
    }

    public function getTitle(): string
    {
        return __('Data Protection Dashboard');
    }
} 