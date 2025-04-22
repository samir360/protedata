@php
    $widgets = $this->getWidgets();
    $columns = $this->getColumns();
@endphp

<x-filament-panels::page class="filament-dashboard-page">
    @if ($this->hasFiltersForm())
        {{ $this->filtersForm }}
    @endif

    <x-filament-widgets::widgets
        :columns="$columns"
        :widgets="$widgets"
    />
</x-filament-panels::page> 