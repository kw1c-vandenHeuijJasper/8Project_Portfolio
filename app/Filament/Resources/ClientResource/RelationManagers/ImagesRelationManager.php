<?php

namespace App\Filament\Resources\ClientResource\RelationManagers;

use App\Filament\Resources\ImageResource;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class ImagesRelationManager extends RelationManager
{
    protected static string $relationship = 'images';

    public function form(Form $form): Form
    {
        return ImageResource::form($form);
    }

    public function table(Table $table): Table
    {
        return ImageResource::table($table);
    }
}
