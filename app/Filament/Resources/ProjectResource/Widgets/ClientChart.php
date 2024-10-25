<?php

namespace App\Filament\Resources\ProjectResource\Widgets;

use App\Models\Client;
use Filament\Widgets\ChartWidget;

class ClientChart extends ChartWidget
{
    protected int|string|array $columnSpan = 1;

    protected static ?string $heading = 'Projects per client';

    protected static ?string $pollingInterval = null;

    protected function getData(): array
    {
        $clients = Client::withCount('projects')->get();

        /**
         * Returns array with clients(key) and amount of projects(value)
         */
        $data = $clients->mapWithKeys(function ($item) {
            return [
                $item['name'] => [
                    'color' => $item['color'],
                    'count' => $item['projects_count'],
                ],
            ];
        })->sortBy('count')->reverse();

        return [
            'datasets' => [
                [
                    'label' => 'Projects',
                    'data' => $data->pluck('count'),
                    'backgroundColor' => $data->pluck('color'),
                ],
            ],
            'labels' => $data->keys(),
        ];
    }

    /**
     * Disables grid lines and displays legend
     */
    protected function getOptions(): array
    {
        return [
            'scales' => [
                'x' => ['display' => false],
                'y' => ['display' => false],
            ],

            'plugins' => [
                'legend' => ['display' => true],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }

    public function getDescription(): ?string
    {
        return 'How many projects a client has';
    }
}
