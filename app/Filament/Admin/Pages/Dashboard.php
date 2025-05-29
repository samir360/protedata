<?php

namespace App\Filament\Admin\Pages;

use App\Filament\Admin\Widgets\AverageRevenuePerUserChart;
use App\Filament\Admin\Widgets\AverageUserSubscriptionConversionChart;
use App\Filament\Admin\Widgets\ChurnChart;
use App\Filament\Admin\Widgets\MetricsOverview;
use App\Filament\Admin\Widgets\MonthlyRecurringRevenueChart;
use App\Filament\Admin\Widgets\ServicesOverview;
use App\Filament\Admin\Widgets\TotalRevenueChart;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;

class Dashboard extends \Filament\Pages\Dashboard
{
    use HasFiltersForm;

    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static string $view = 'filament.admin.pages.dashboard';

    public function getWidgets(): array
    {
        return [
            // Vacío para no mostrar widgets
        ];
    }

    // public function filtersForm(Form $form): Form
    // {
    //     return $form->schema([
    //         Section::make([
    //             DatePicker::make('start_date')
    //                 ->default(now()->subYear()->toDateString())
    //                 ->afterStateHydrated(function (DatePicker $component, ?string $state) {
    //                     if (! $state) {
    //                         $component->state(now()->subYear()->toDateString());
    //                     }
    //                 })
    //                 ->label(__('Start Date')),
    //             DatePicker::make('end_date')
    //                 ->default(date(now()->toDateString()))
    //                 ->afterStateHydrated(function (DatePicker $component, ?string $state) {
    //                     if (! $state) {
    //                         $component->state(now()->toDateString());
    //                     }
    //                 })
    //                 ->label(__('End Date')),
    //             Select::make('period')->label(__('Period'))->options([
    //                 'day' => __('Day'),
    //                 'week' => __('Week'),
    //                 'month' => __('Month'),
    //                 'year' => __('Year'),
    //             ])->default('month'),

    //         ])->columns(3),
    //     ]);
    // }
}
