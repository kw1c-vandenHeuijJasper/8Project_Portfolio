<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use App\Filament\Resources\ProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProject extends CreateRecord
{
    protected static string $resource = ProjectResource::class;

    // protected function mutateFormDataBeforeCreate(array $data): array
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

    //     return $data;
    // }
}
