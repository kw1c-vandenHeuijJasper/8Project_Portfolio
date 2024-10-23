<?php

namespace App\Filament\Resources\ProjectResource\Widgets;

use App\Models\Project;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ProjectInfo extends BaseWidget

{
    protected int | string | array $columnSpan = 'full';

    protected function getStats(): array
    {
        $projects = Project::query();
        return [
            Stat::make(
                'Projects Finished',
                $projects
                    ->with('client',)
                    ->completed()
                    ->get('id')
                    ->count()
            ),
            Stat::make(
                'Total Projects',
                Project::count()
            ),

        ];
    }
}
