<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\Widget;

class ServicesOverview extends Widget
{
    protected static string $view = 'filament.admin.widgets.services-overview';

    // Lowest sort order to appear at the top
    protected static ?int $sort = -1;

    // Make it full width
    protected int | string | array $columnSpan = 'full';
} 