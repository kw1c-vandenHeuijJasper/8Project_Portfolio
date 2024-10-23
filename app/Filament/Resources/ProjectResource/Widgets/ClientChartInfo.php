<?php

namespace App\Filament\Resources\ProjectResource\Widgets;

use Filament\Tables;
use App\Models\Client;
use App\Models\Project;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Support\HtmlString;

class ClientChartInfo extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(
                \App\Models\Client::withCount('project'),
                // Project::completed()->count(),
            )
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('project_count'),
                Tables\Columns\TextColumn::make('id')
                    ->label('Projects Completed')
                    ->formatStateUsing(
                        fn(Client $record): HtmlString => new HtmlString($record->project()->completed()->count())
                    ),
            ]);
    }
}
