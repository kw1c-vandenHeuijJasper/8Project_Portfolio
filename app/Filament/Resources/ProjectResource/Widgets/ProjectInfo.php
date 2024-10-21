<?php

namespace App\Filament\Resources\ProjectResource\Widgets;

use App\Models\Project;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ProjectInfo extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make(
                'Projects Finished',
                Project::with([
                    'client',
                    'images',
                    'tasks'
                ])
                    ->get('id')
                    ->where('percentage', '100')
                    ->count()
            ),
            Stat::make(
                'Total Projects',
                Project::count()
            ),

        ];
    }
}
