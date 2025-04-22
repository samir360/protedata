<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Currency;
use App\Services\MetricsService;
use Filament\Support\RawJs;
use Filament\Widgets\ChartWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Carbon;

class TotalRevenueChart extends ChartWidget
{
    use InteractsWithPageFilters;

    protected static ?int $sort = 2;

    protected static ?string $pollingInterval = null;

    protected function getData(): array
    {
        // Get filters with default values if not set
        $filters = $this->filters ?? [];
        $startDate = $filters['start_date'] ?? now()->subYear()->toDateString();
        $endDate = $filters['end_date'] ?? now()->toDateString();
        $period = $filters['period'] ?? 'month';

        // parse the dates to Carbon instances
        $startDate = $startDate ? Carbon::parse($startDate) : now()->subYear();
        $endDate = $endDate ? Carbon::parse($endDate) : now();

        $metricsService = resolve(MetricsService::class);

        $data = $metricsService->calculateDailyRevenueChart($period, $startDate, $endDate);

        return [
            'datasets' => [
                [
                    'label' => 'Total Revenue',
                    'data' => array_values($data),
                ],
            ],
            'labels' => array_keys($data),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    public function getHeading(): string|Htmlable|null
    {
        return __('Total Revenue overview');
    }

    public function getDescription(): string|Htmlable|null
    {
        return __('Total Revenue is the sum of all revenue generated in the period.');
    }

    protected function getOptions(): RawJs
    {
        $currentCurrency = config('app.default_currency');
        $currency = Currency::where('code', $currentCurrency)->first();
        $symbol = $currency->symbol;

        return RawJs::make(<<<JS
        {
            scales: {
                y: {
                    ticks: {
                        callback: (value) => '$symbol' + value.toFixed(2),
                    },
                },
            },
        }
    JS);
    }
}
