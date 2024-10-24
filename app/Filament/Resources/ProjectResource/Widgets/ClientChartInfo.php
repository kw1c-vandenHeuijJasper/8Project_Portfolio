<?php

namespace App\Filament\Resources\ProjectResource\Widgets;

use Filament\Tables;
use App\Models\Client;
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
                Client::withCount('projects'),
            )
            ->columns([
                Tables\Columns\ColorColumn::make('color')
                    ->label(''),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('projects_count'),
                Tables\Columns\TextColumn::make('description')
                    ->label('Projects Completed')
                    ->formatStateUsing(
                        fn(Client $record): HtmlString => new HtmlString($record->projects()->completed()->count())
                    ),
            ])
            ->defaultSort(fn($query) => $query->orderBy('projects_count', 'desc')->orderBy('name', 'asc'));
    }
}
