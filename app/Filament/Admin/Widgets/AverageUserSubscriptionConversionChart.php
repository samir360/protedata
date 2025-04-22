<?php

namespace App\Filament\Admin\Widgets;

use App\Services\MetricsService;
use Filament\Support\RawJs;
use Filament\Widgets\ChartWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Carbon;

class AverageUserSubscriptionConversionChart extends ChartWidget
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

        $data = $metricsService->calculateAverageUserSubscriptionConversionChart($period, $startDate, $endDate);

        return [
            'datasets' => [
                [
                    'label' => 'Average User Subscription Conversion',
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
        return __('Average User Subscription Conversion');
    }

    public function getDescription(): string|Htmlable|null
    {
        return __('Average User Subscription Conversion is the % of users who subscribed to a plan to the total users.');
    }

    protected function getOptions(): RawJs
    {
        return RawJs::make(<<<'JS'
        {
            scales: {
                y: {
                    ticks: {
                        callback: (value) => value + '%',
                    },
                },
            },
        }
    JS);
    }
}
