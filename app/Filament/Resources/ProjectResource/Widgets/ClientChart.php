<?php

namespace App\Filament\Resources\ProjectResource\Widgets;

use App\Models\Client;
use Filament\Widgets\ChartWidget;

class ClientChart extends ChartWidget
{
    protected int | string | array $columnSpan = 1;

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
                $item['name'] =>  $item['projects_count']
            ];
        });

        /**
         * Generate random colors and put them in an array
         */
        foreach ($data as $color) {
            $colors[] = fake()->rgbCssColor();
        }


        return [
            'datasets' => [
                [
                    'label' => 'Projects',
                    'data' => $data->values(),
                    'backgroundColor' => $colors,
                ],
            ],
            'labels' => $data->keys()
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
                'y' => ['display' => false]
            ],

            'plugins' => [
                'legend' => ['display' => true,],
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
