<?php

namespace App\Filament\Resources\ProjectResource\RelationManagers;

use App\Filament\Resources\ImageResource;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class ImagesRelationManager extends RelationManager
{
    protected static string $relationship = 'images';

    public function form(Form $form): Form
    {
        return ImageResource::form($form);
        // return $form
        //     ->schema([
        //         Forms\Components\TextInput::make('path')
        //             ->required()
        //             ->maxLength(255),
        //     ]);
    }

    public function table(Table $table): Table
    {
        return ImageResource::table($table);
        // return $table
        //     ->recordTitleAttribute('path')
        //     ->columns([
        //         Tables\Columns\TextColumn::make('path'),
        //     ])
        //     ->filters([
        //         //
        //     ])
        //     ->headerActions([
        //         Tables\Actions\CreateAction::make(),
        //     ])
        //     ->actions([
        //         Tables\Actions\EditAction::make(),
        //         Tables\Actions\DeleteAction::make(),
        //     ])
        //     ->bulkActions([
        //         Tables\Actions\BulkActionGroup::make([
        //             Tables\Actions\DeleteBulkAction::make(),
        //         ]),
        //     ]);
    }
}
