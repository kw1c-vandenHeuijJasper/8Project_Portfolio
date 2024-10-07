<?php

namespace App\Filament\Resources\ClientResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Filament\Resources\ImageResource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

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
