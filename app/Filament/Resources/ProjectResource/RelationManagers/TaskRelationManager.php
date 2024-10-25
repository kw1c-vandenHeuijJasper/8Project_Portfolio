<?php

namespace App\Filament\Resources\ProjectResource\RelationManagers;

use App\Enums\TaskStatus;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class TaskRelationManager extends RelationManager
{
    protected static string $relationship = 'tasks';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->maxLength(255)
                    ->required(),
                Forms\Components\Textarea::make('content')
                    ->nullable()
                    ->columnSpanFull(),
                Forms\Components\Select::make('status')
                    ->options(TaskStatus::class)
                    ->preload()
                    ->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->reorderable('sort')
            ->recordTitleAttribute('name')
            ->columns([
                // Tables\Columns\TextColumn::make('sort'), // sort order
                Tables\Columns\TextColumn::make('name')
                    ->limit(30)
                    ->searchable(),
                Tables\Columns\TextColumn::make('content')
                    ->limit(25),
                Tables\Columns\SelectColumn::make('status')
                    ->options(TaskStatus::class),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('sort', 'asc')
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\Action::make('Complete All')->action(function () {
                    $this->ownerRecord->tasks()->update(['status' => 2]);
                })
                    ->disabled($this->ownerRecord->hasUncompletedTasks())
                    ->requiresConfirmation(),
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
