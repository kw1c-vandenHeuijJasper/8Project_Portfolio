<?php

namespace App\Filament\Resources\ProjectResource\Widgets;

use App\Models\Client;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
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
                Tables\Columns\TextColumn::make('name')
                    ->size(TextColumn\TextColumnSize::ExtraSmall),
                Tables\Columns\TextColumn::make('projects_count')
                    ->size(TextColumn\TextColumnSize::ExtraSmall),
                Tables\Columns\TextColumn::make('description')
                    ->size(TextColumn\TextColumnSize::ExtraSmall)
                    ->label('Projects Completed')
                    ->formatStateUsing(fn (Client $record): HtmlString => new HtmlString($record->projects()->completed()->count())),
                Tables\Columns\TextColumn::make('id')
                    ->size(TextColumn\TextColumnSize::ExtraSmall)
                    ->label('Completion')
                    ->formatStateUsing(
                        function (Client $record) {
                            (int) $count = (int) $record->projects()->completed()->count();
                            (int) $totalcount = (int) $record->projects_count;
                            if ($count === 0 || $totalcount === 0) {
                                return '0%';
                            } else {
                                (int) $percentage = ((int) $count / (int) $totalcount) * 100;

                                return (int) $percentage.'%';
                            }
                        }
                    ),
            ])
            ->defaultSort(fn ($query) => $query->orderBy('projects_count', 'desc')->orderBy('name', 'asc'));
    }
}
