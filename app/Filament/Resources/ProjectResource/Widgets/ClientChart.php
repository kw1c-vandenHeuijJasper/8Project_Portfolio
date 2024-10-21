<?php

namespace App\Filament\Resources\ProjectResource\Widgets;

use App\Models\Client;
use Filament\Widgets\ChartWidget;


class ClientChart extends ChartWidget
{
    protected static ?string $heading = 'Projects';

    protected static string $color = 'info';

    protected function getData(): array
    {
        $clients = Client::withCount('project')->get();

        $data = $clients->mapWithKeys(function ($item) {
            return [
                $item['name'] =>  $item['project_count']
            ];
        });

        return [

            'datasets' => [
                [
                    'label' => 'Projects',
                    'data' => $data->values(),
                ],
            ],
            'labels' => $data->keys()
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
