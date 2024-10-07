<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use App\Filament\Resources\ProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProject extends EditRecord
{
    protected static string $resource = ProjectResource::class;

    // protected function mutateFormDataBeforeSave(array $data): array
    // {
    //     $start_date = $data['start_date'];
    //     $end_date = $data['end_date'];

    //     if ($start_date > $end_date) {
    //         $temp = $start_date;
    //         $start_date = $end_date;
    //         $end_date = $temp;
    //     };

    //     $data['start_date'] = $start_date;
    //     $data['end_date'] = $end_date;

    //     $this->refreshFormData([
    //         'start_date',
    //         'end_date',
    //     ]);

    //     return $data;
    // }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
